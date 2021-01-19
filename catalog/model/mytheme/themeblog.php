<?php
class ModelMythemeThemeBlog extends Model {
	public function getBlogsByModule($module_id, $limit = 0) {
		if ($limit) {
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "themeblog b LEFT JOIN " . DB_PREFIX . "themeblog_description bd ON (b.themeblog_id = bd.themeblog_id) WHERE b.status = '1' AND bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b.module_id = '" . (int)$module_id . "' ORDER BY b.date_added DESC LIMIT " . (int)$limit);
		} else {
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "themeblog b LEFT JOIN " . DB_PREFIX . "themeblog_description bd ON (b.themeblog_id = bd.themeblog_id) WHERE b.status = '1' AND bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b.module_id = '" . (int)$module_id . "' ORDER BY b.date_added DESC");
		}

		return $query->rows;
	}

	public function getBlog($themeblog_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "themeblog b LEFT JOIN " . DB_PREFIX . "themeblog_description bd ON (b.themeblog_id = bd.themeblog_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b.themeblog_id = '" . (int)$themeblog_id . "'");

		return $query->row;
	}

	public function addComment($themeblog_id, $data, $language_id) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "themeblog_comment SET themeblog_id = '" . (int)$themeblog_id . "', approved = '" . (int)$data['auto_approve'] . "', author = '" . $this->db->escape($data['author']) . "', email = '" . $this->db->escape($data['email']) . "', date_added = now()");

		$themeblog_comment_id = $this->db->getLastId();

		$this->db->query("INSERT INTO " . DB_PREFIX . "themeblog_comment_description SET themeblog_comment_id = '" . (int)$themeblog_comment_id . "', language_id = '" . (int)$language_id . "', comment = '" . $this->db->escape($data['comment']) . "'");

		$blog_info = $this->getBlog($themeblog_id);

		$mail = new Mail();
		$mail->protocol = $this->config->get('config_mail_protocol');
		$mail->parameter = $this->config->get('config_mail_parameter');
		$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
		$mail->smtp_username = $this->config->get('config_mail_smtp_username');
		$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
		$mail->smtp_port = $this->config->get('config_mail_smtp_port');
		$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

		$mail->setTo($this->config->get('config_email'));
		$mail->setFrom($data['email']);
		$mail->setSender($data['author']);
		$mail->setSubject(sprintf($this->language->get('email_subject'), $blog_info['title']));
		$mail->setText(sprintf($this->language->get('email_content'), $blog_info['title']));
		$mail->send();
	}

	public function getBlogComments($themeblog_id, $language_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "themeblog_comment bc LEFT JOIN " . DB_PREFIX . "themeblog_comment_description bcd ON (bc.themeblog_comment_id = bcd.themeblog_comment_id) WHERE bcd.language_id = '" . (int)$language_id . "' AND bc.approved = '1' AND bc.themeblog_id = '" . (int)$themeblog_id . "' ORDER BY bc.date_added DESC");

		return $query->rows;
	}

	public function getBlogs() {
		$blog_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "themeblog WHERE status = '1' GROUP BY module_id");

		if ($query->rows) {
			foreach ($query->rows as $blog) {
				if ($this->getLayoutModule('themeblog.' . $blog['module_id'])) {
					$blog_data[] = $blog;
				}
			}
		}

		return $blog_data;
	}

	public function getLayoutModule($code) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "layout_route lr LEFT JOIN " . DB_PREFIX . "layout_module lm ON (lr.layout_id = lm.layout_id) WHERE lr.store_id = '" . (int)$this->config->get('config_store_id') . "' AND lm.code = '" . $this->db->escape($code) . "'");

		if ($query->rows) {
			return true;
		} else {
			return false;
		}
	}

	public function getModule($module_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "module` WHERE `module_id` = '" . (int)$module_id . "'");

		return $query->row;
	}

	public function getModulesByCode($code) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "module WHERE code = '" . $this->db->escape($code) . "'");

		return $query->rows;
	}

	public function getLanguageByCode($code) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "language WHERE code = '" . $this->db->escape($code) . "'");

		return $query->row;
	}
	public function getTotalBlogComments($themeblog_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "themeblog_comment WHERE themeblog_id = '" . (int)$themeblog_id . "'");

		if ($query->row) {
			return $query->row['total'];
		} else {
			return false;
		}
	}
}