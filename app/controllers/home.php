<?php
	
	class Home extends Controller{
		protected $model;
		protected $view;
		
		function __construct($params){
			parent::__construct($params);
			$this->model=new mHome();
			$this->view= new vHome();
			
			//echo 'Hello controller!';
		}
		function home(){
			//Coder::codear($this->conf);
		}

		function login(){
			if(isset($_POST['email'])){
				$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
				$password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
				$user = $this -> model -> login($email,$password);//model
				if($user == true){
					header('Location:'.APP_W.'user');
				}else{
					header('Location:'.APP_W.'register');
				}
			}
		}

		function register(){
			
		}
}