<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_model');
		$this->load->model('User_model');
	}

	public function index()
	{

		$blog_list = $this->Blog_model->get_blog_list();
		$catalog_list = $this->Blog_model->get_catalog_list();


		$this->load->view('index',array(
			'list'=>$blog_list,
			'catalog_list'=>$catalog_list
		));
	}
	public function login(){
		$this->load->view('login');
	}
	public function save(){
		$email = $this->input->get('email');
		$name = $this->input->get('name');
		$pwd = $this->input->get('pwd');
		$sex = $this->input->get('sex');
		$code = $this->input->get('code');
		$captcha = $this->session->userdata('captcha');
		if($sex == ''){
			echo 'sex_error';
		}elseif($code != $captcha){
			echo 'code_error';
		}else{
			$rows = $this->User_model->save($email,$name,$pwd,$sex);

			if($rows>0){
				echo 'success';
			}else{
				echo 'fail';
			}
		}


	}

	public function captcha(){
		//先获取验证码
		$this->load->helper('captcha');
		$word = rand(1000,9999);
		$this->session->set_userdata('captcha',$word);

		$vals = array(
			'word'      => $word,
			'img_path'  => './captcha/',
			'img_url'   => 'http://127.0.0.1/myblog_25/captcha/',
			'font_path' => './path/to/fonts/texb.ttf',
			'img_width' => '100',
			'img_height'    => 30,
			'word_length'   => 8,
			'font_size' => 16,
			'pool'      => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

			// White background and border, black text and red grid
			'colors'    => array(
				'background' => array(255, 255, 255),
				'border' => array(255, 255, 255),
				'text' => array(0, 0, 0),
				'grid' => array(255, 40, 40)
			)
		);

//		GD2

		$cap = create_captcha($vals);
		$img = $cap['image'];
		return $img;
	}

	public function get_captcha(){
		$img = $this->captcha();
		echo $img;
	}

	public function reg(){


		$img = $this->captcha();
		$this->load->view('reg',array(
			'captcha'=>$img
		));
	}

	public function check_email(){

		$email = $this->input->get('email');
		$rows = $this->User_model->get_user_by_email($email);
		if(count($rows) >0){
			echo 'fail';
		}else{
			echo 'success';
		}
	}

}
