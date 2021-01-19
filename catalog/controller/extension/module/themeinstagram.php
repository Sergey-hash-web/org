<?php
class ControllerExtensionModulethemeinstagram extends Controller {
	public function index($setting) {
		static $module = 0;
		$this->load->language('extension/module/themeinstagram');

		$data['heading_title'] = $this->language->get('heading_title');
		$this->load->model('tool/image');

		$data['images'] = array();
		$user_id=$setting['user_id'];
		$access_token=$setting['access_token'];
		$url = "https://api.instagram.com/v1/users/".$user_id."/media/recent/?access_token=".$access_token;
		$ch = curl_init($url); 

		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
		$json = curl_exec($ch); 
		curl_close($ch);
		$result = json_decode($json);
		$width_height='s'.$setting['dimension'];
		$width='';
		switch($setting['dimension'])
		{
			case '50x50': $width=50; break;
			case '100x100': $width=100; break;
			case '150x150': $width=150; break;
			case '200x200': $width=200; break;
			case '350x350': $width=350; break;
			case '640x640': $width=640; break;
			case '1080x1080': $width=1080; break;
			
		}
		foreach ($result->data as $post) {
			$data['images'][] = array(
					'title' => ($post->caption)? (($post->caption->text) ? $post->caption->text :'') : '',
					'link'  => $post->link,
					'image' => str_replace('s200x200/',$width_height,$post->images->low_resolution->url),
					'time'  => htmlentities(date("M j, Y", $post->created_time))
				);
		}
		$data['item'] = $setting['item'];
		$data['width'] = $width;		

		return $this->load->view('extension/module/themeinstagram', $data);
		
	}
}
