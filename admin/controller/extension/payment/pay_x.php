<?php
class ControllerExtensionPaymentPayX extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/payment/pay_x');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('payment_pay_x', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['email'])) {
			$data['error_email'] = $this->error['email'];
		} else {
			$data['error_email'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/payment/pay_x', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/payment/pay_x', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true);

		if (isset($this->request->post['payment_pay_x_email'])) {
			$data['payment_pay_x_email'] = $this->request->post['payment_pay_x_email'];
		} else {
			$data['payment_pay_x_email'] = $this->config->get('payment_pay_x_email');
		}

		if (isset($this->request->post['payment_pay_x_test'])) {
			$data['payment_pay_x_test'] = $this->request->post['payment_pay_x_test'];
		} else {
			$data['payment_pay_x_test'] = $this->config->get('payment_pay_x_test');
		}

		if (isset($this->request->post['payment_pay_x_transaction'])) {
			$data['payment_pay_x_transaction'] = $this->request->post['payment_pay_x_transaction'];
		} else {
			$data['payment_pay_x_transaction'] = $this->config->get('payment_pay_x_transaction');
		}

		if (isset($this->request->post['payment_pay_x_debug'])) {
			$data['payment_pay_x_debug'] = $this->request->post['payment_pay_x_debug'];
		} else {
			$data['payment_pay_x_debug'] = $this->config->get('payment_pay_x_debug');
		}

		if (isset($this->request->post['payment_pay_x_total'])) {
			$data['payment_pay_x_total'] = $this->request->post['payment_pay_x_total'];
		} else {
			$data['payment_pay_x_total'] = $this->config->get('payment_pay_x_total');
		}

		if (isset($this->request->post['payment_pay_x_canceled_reversal_status_id'])) {
			$data['payment_pay_x_canceled_reversal_status_id'] = $this->request->post['payment_pay_x_canceled_reversal_status_id'];
		} else {
			$data['payment_pay_x_canceled_reversal_status_id'] = $this->config->get('payment_pay_x_canceled_reversal_status_id');
		}

		if (isset($this->request->post['payment_pay_x_completed_status_id'])) {
			$data['payment_pay_x_completed_status_id'] = $this->request->post['payment_pay_x_completed_status_id'];
		} else {
			$data['payment_pay_x_completed_status_id'] = $this->config->get('payment_pay_x_completed_status_id');
		}

		if (isset($this->request->post['payment_pay_x_denied_status_id'])) {
			$data['payment_pay_x_denied_status_id'] = $this->request->post['payment_pay_x_denied_status_id'];
		} else {
			$data['payment_pay_x_denied_status_id'] = $this->config->get('payment_pay_x_denied_status_id');
		}

		if (isset($this->request->post['payment_pay_x_expired_status_id'])) {
			$data['payment_pay_x_expired_status_id'] = $this->request->post['payment_pay_x_expired_status_id'];
		} else {
			$data['payment_pay_x_expired_status_id'] = $this->config->get('payment_pay_x_expired_status_id');
		}

		if (isset($this->request->post['payment_pay_x_failed_status_id'])) {
			$data['payment_pay_x_failed_status_id'] = $this->request->post['payment_pay_x_failed_status_id'];
		} else {
			$data['payment_pay_x_failed_status_id'] = $this->config->get('payment_pay_x_failed_status_id');
		}

		if (isset($this->request->post['payment_pay_x_pending_status_id'])) {
			$data['payment_pay_x_pending_status_id'] = $this->request->post['payment_pay_x_pending_status_id'];
		} else {
			$data['payment_pay_x_pending_status_id'] = $this->config->get('payment_pay_x_pending_status_id');
		}

		if (isset($this->request->post['payment_pay_x_processed_status_id'])) {
			$data['payment_pay_x_processed_status_id'] = $this->request->post['payment_pay_x_processed_status_id'];
		} else {
			$data['payment_pay_x_processed_status_id'] = $this->config->get('payment_pay_x_processed_status_id');
		}

		if (isset($this->request->post['payment_pay_x_refunded_status_id'])) {
			$data['payment_pay_x_refunded_status_id'] = $this->request->post['payment_pay_x_refunded_status_id'];
		} else {
			$data['payment_pay_x_refunded_status_id'] = $this->config->get('payment_pay_x_refunded_status_id');
		}

		if (isset($this->request->post['payment_pay_x_reversed_status_id'])) {
			$data['payment_pay_x_reversed_status_id'] = $this->request->post['payment_pay_x_reversed_status_id'];
		} else {
			$data['payment_pay_x_reversed_status_id'] = $this->config->get('payment_pay_x_reversed_status_id');
		}

		if (isset($this->request->post['payment_pay_x_voided_status_id'])) {
			$data['payment_pay_x_voided_status_id'] = $this->request->post['payment_pay_x_voided_status_id'];
		} else {
			$data['payment_pay_x_voided_status_id'] = $this->config->get('payment_pay_x_voided_status_id');
		}

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		if (isset($this->request->post['payment_pay_x_geo_zone_id'])) {
			$data['payment_pay_x_geo_zone_id'] = $this->request->post['payment_pay_x_geo_zone_id'];
		} else {
			$data['payment_pay_x_geo_zone_id'] = $this->config->get('payment_pay_x_geo_zone_id');
		}

		$this->load->model('localisation/geo_zone');

		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

		if (isset($this->request->post['payment_pay_x_status'])) {
			$data['payment_pay_x_status'] = $this->request->post['payment_pay_x_status'];
		} else {
			$data['payment_pay_x_status'] = $this->config->get('payment_pay_x_status');
		}

		if (isset($this->request->post['payment_pay_x_sort_order'])) {
			$data['payment_pay_x_sort_order'] = $this->request->post['payment_pay_x_sort_order'];
		} else {
			$data['payment_pay_x_sort_order'] = $this->config->get('payment_pay_x_sort_order');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/payment/pay_x', $data));
	}

	private function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/pay_x')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['payment_pay_x_email']) {
			$this->error['email'] = $this->language->get('error_email');
		}

		return !$this->error;
	}
}