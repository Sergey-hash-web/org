<?php
class ControllerExtensionModuleThemeBlog extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/themeblog');
		$this->load->model('mytheme/themeblog');
		$this->load->model('tool/image');
		
		
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_read_more'] = $this->language->get('text_read_more');
		$data['text_date_added'] = $this->language->get('text_date_added');
		$data['entry_comment'] = $this->language->get('entry_comment');
		
		
		
		

		$data['button_all_blogs'] = $this->language->get('button_all_blogs');

		$data['all_blogs'] = $this->url->link('information/themeblog/blogs');

		$data['blogs'] = array();
		
		if (!$setting['limit']) {
			$setting['limit'] = 4;
		}
		
				
		foreach ($this->model_mytheme_themeblog->getBlogsByModule($setting['module_id'], $setting['limit']) as $result) {			
			
			$total_comments = $this->model_mytheme_themeblog->getTotalBlogComments($result['themeblog_id']);
			
			$data['blogs'][] = array(
				'themeblog_id'  => $result['themeblog_id'],
				'image' 	  => $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']),
				'title'       => html_entity_decode($result['title'], ENT_QUOTES, 'UTF-8'),
				'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $setting['char_limit']) . '...',
				'date_added'  => date($this->language->get('date_format_short'), strtotime($result['date_added'])),				
				'total_comments' => number_format($total_comments),
				'href'        => $this->url->link('information/themeblog', 'themeblog_id=' . $result['themeblog_id'])
			);  	
		}
		
				
		return $this->load->view('extension/module/themeblog', $data); 
	}
}