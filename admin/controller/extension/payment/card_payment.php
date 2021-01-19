<?php
class ControllerExtensionPaymentCardPayment extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/payment/card_payment');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('payment_card_payment', $this->request->post);

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
			'href' => $this->url->link('extension/payment/card_payment', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/payment/card_payment', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true);

		if (isset($this->request->post['payment_card_payment_email'])) {
			$data['payment_card_payment_email'] = $this->request->post['payment_card_payment_email'];
		} else {
			$data['payment_card_payment_email'] = $this->config->get('payment_card_payment_email');
		}

		if (isset($this->request->post['payment_card_payment_test'])) {
			$data['payment_card_payment_test'] = $this->request->post['payment_card_payment_test'];
		} else {
			$data['payment_card_payment_test'] = $this->config->get('payment_card_payment_test');
		}

		if (isset($this->request->post['payment_card_payment_transaction'])) {
			$data['payment_card_payment_transaction'] = $this->request->post['payment_card_payment_transaction'];
		} else {
			$data['payment_card_payment_transaction'] = $this->config->get('payment_card_payment_transaction');
		}

		if (isset($this->request->post['payment_card_payment_debug'])) {
			$data['payment_card_payment_debug'] = $this->request->post['payment_card_payment_debug'];
		} else {
			$data['payment_card_payment_debug'] = $this->config->get('payment_card_payment_debug');
		}

		if (isset($this->request->post['payment_card_payment_total'])) {
			$data['payment_card_payment_total'] = $this->request->post['payment_card_payment_total'];
		} else {
			$data['payment_card_payment_total'] = $this->config->get('payment_card_payment_total');
		}

		if (isset($this->request->post['payment_card_payment_canceled_reversal_status_id'])) {
			$data['payment_card_payment_canceled_reversal_status_id'] = $this->request->post['payment_card_payment_canceled_reversal_status_id'];
		} else {
			$data['payment_card_payment_canceled_reversal_status_id'] = $this->config->get('payment_card_payment_canceled_reversal_status_id');
		}

		if (isset($this->request->post['payment_card_payment_completed_status_id'])) {
			$data['payment_card_payment_completed_status_id'] = $this->request->post['payment_card_payment_completed_status_id'];
		} else {
			$data['payment_card_payment_completed_status_id'] = $this->config->get('payment_card_payment_completed_status_id');
		}

		if (isset($this->request->post['payment_card_payment_denied_status_id'])) {
			$data['payment_card_payment_denied_status_id'] = $this->request->post['payment_card_payment_denied_status_id'];
		} else {
			$data['payment_card_payment_denied_status_id'] = $this->config->get('payment_card_payment_denied_status_id');
		}

		if (isset($this->request->post['payment_card_payment_expired_status_id'])) {
			$data['payment_card_payment_expired_status_id'] = $this->request->post['payment_card_payment_expired_status_id'];
		} else {
			$data['payment_card_payment_expired_status_id'] = $this->config->get('payment_card_payment_expired_status_id');
		}

		if (isset($this->request->post['payment_card_payment_failed_status_id'])) {
			$data['payment_card_payment_failed_status_id'] = $this->request->post['payment_card_payment_failed_status_id'];
		} else {
			$data['payment_card_payment_failed_status_id'] = $this->config->get('payment_card_payment_failed_status_id');
		}

		if (isset($this->request->post['payment_card_payment_pending_status_id'])) {
			$data['payment_card_payment_pending_status_id'] = $this->request->post['payment_card_payment_pending_status_id'];
		} else {
			$data['payment_card_payment_pending_status_id'] = $this->config->get('payment_card_payment_pending_status_id');
		}

		if (isset($this->request->post['payment_card_payment_processed_status_id'])) {
			$data['payment_card_payment_processed_status_id'] = $this->request->post['payment_card_payment_processed_status_id'];
		} else {
			$data['payment_card_payment_processed_status_id'] = $this->config->get('payment_card_payment_processed_status_id');
		}

		if (isset($this->request->post['payment_card_payment_refunded_status_id'])) {
			$data['payment_card_payment_refunded_status_id'] = $this->request->post['payment_card_payment_refunded_status_id'];
		} else {
			$data['payment_card_payment_refunded_status_id'] = $this->config->get('payment_card_payment_refunded_status_id');
		}

		if (isset($this->request->post['payment_card_payment_reversed_status_id'])) {
			$data['payment_card_payment_reversed_status_id'] = $this->request->post['payment_card_payment_reversed_status_id'];
		} else {
			$data['payment_card_payment_reversed_status_id'] = $this->config->get('payment_card_payment_reversed_status_id');
		}

		if (isset($this->request->post['payment_card_payment_voided_status_id'])) {
			$data['payment_card_payment_voided_status_id'] = $this->request->post['payment_card_payment_voided_status_id'];
		} else {
			$data['payment_card_payment_voided_status_id'] = $this->config->get('payment_card_payment_voided_status_id');
		}

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		if (isset($this->request->post['payment_card_payment_geo_zone_id'])) {
			$data['payment_card_payment_geo_zone_id'] = $this->request->post['payment_card_payment_geo_zone_id'];
		} else {
			$data['payment_card_payment_geo_zone_id'] = $this->config->get('payment_card_payment_geo_zone_id');
		}

		$this->load->model('localisation/geo_zone');

		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

		if (isset($this->request->post['payment_card_payment_status'])) {
			$data['payment_card_payment_status'] = $this->request->post['payment_card_payment_status'];
		} else {
			$data['payment_card_payment_status'] = $this->config->get('payment_card_payment_status');
		}

		if (isset($this->request->post['payment_card_payment_sort_order'])) {
			$data['payment_card_payment_sort_order'] = $this->request->post['payment_card_payment_sort_order'];
		} else {
			$data['payment_card_payment_sort_order'] = $this->config->get('payment_card_payment_sort_order');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/payment/card_payment', $data));
	}

	private function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/card_payment')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['payment_card_payment_email']) {
			$this->error['email'] = $this->language->get('error_email');
		}

		return !$this->error;
	}
}