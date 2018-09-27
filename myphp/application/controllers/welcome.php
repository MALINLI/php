<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function save()
	{
		echo "sava...";
		//1.接收数据
		$username = $this -> input -> post('username');
		$password = $this -> input -> post('password');
		//2.验证信息
		if($username == ''){
			$data = array({
				'err_name' => '请输入用户名'
			});
			$this -> load -> view('login',$data);
		}
		//3.连接数据库
		//4.响应结果，加载view
	}
}
?>