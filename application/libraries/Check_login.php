<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Check_login {
	protected $_ci;

	function __construct(){
		$CI =& get_instance();
	if($CI->session->userdata('login_member') OR $CI->session->userdata('login_admin')){
    redirect(base_url('Home'));
	}
	}

}
?>
