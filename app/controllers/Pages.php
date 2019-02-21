<?php
class Pages extends Controller {
	public function __construct() {

	}

	public function index() {
		$data = [
			'title' => 'Welcome'
		];

		$this->view('pages/index', $data);
	}

	public function contact() {
		$data = [
			'title' => 'Strategy Session'
		];

		$this->view('pages/contact', $data);
	}	


	public function integration() {
		$data = [
			'title' => 'What IS Systems Integration?'
		];

		$this->view('pages/what-is-systems-integration', $data);
	}	

	public function privacy() {
		$data = [
			'title' => 'Privacy Policy'
		];

		$this->view('pages/privacy-policy', $data);
	}	

	public function tank() {
		$data = [
			'title' => 'Testimonials'
		];

		$this->view('pages/tank', $data);
	}	

	public function terms() {
		$data = [
			'title' => 'Terms of Service'
		];

		$this->view('pages/terms-of-service', $data);
	}	


}