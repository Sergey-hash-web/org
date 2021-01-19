<?php
class ControllerExtensionModuleNewsletters extends Controller {

	private $error = array();

	public function index() {
		$this->load->language('extension/module/newsletter');
		$this->load->model('extension/module/newsletters');
		
		$this->model_extension_module_newsletters->createNewsletter();

		
		$data['brands'] = array();

        if ($this->request->server['HTTPS']) {
            $server = $this->config->get('config_ssl');
        } else {
            $server = $this->config->get('config_url');
        }

        if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
            $data['logo'] = $server . 'image/' . $this->config->get('config_logo');
        } else {
            $data['logo'] = '';
        }
		
						
		return $this->load->view('extension/module/newsletters', $data);
	}
	public function news()
	{
		$this->load->model('extension/module/newsletters');
		
		$json = array();
		$json['message'] = $this->model_extension_module_newsletters->subscribes($this->request->post);
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
		
	}
	
	public function uninstall() {
		$this->load->model('mytheme/newsletter');

		$this->model_mytheme_newsletter->dropNewsletter();
	}
	
}
