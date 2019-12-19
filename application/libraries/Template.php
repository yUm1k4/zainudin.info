<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Template {
	protected $_ci;
	function __construct(){
		$this->_ci =&get_instance();
		
	}

	function display($template,$data=NULL){
		$data['_menu'] = $this->_ci->load->view('template/menu',$data, true);
		$data['_content'] = $this->_ci->load->view($template,$data, true);
		$data['_footer'] = $this->_ci->load->view('template/footer',$data, true);

		$this->_ci->load->view('template/template.php',$data);
	}

	function admin($template,$data=NULL){
		$data['_menu'] = $this->_ci->load->view('template_admin/menu',$data, true);
		$data['_content'] = $this->_ci->load->view($template,$data, true);
		$data['_footer'] = $this->_ci->load->view('template_admin/footer',$data, true);

		$this->_ci->load->view('template_admin/template.php',$data);
	}
}

?>