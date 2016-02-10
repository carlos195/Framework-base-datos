<?php

	class mHome extends Model{

		function __construct(){
			parent::__construct();
			
		}

		function login($email,$password){
			try{
		     $sql = "SELECT * FROM usuarios WHERE email=? AND password=?";
		     $this -> query($sql);
		     $this -> bind(1,$email);
		     $this -> bind(2,$password);
		     $this -> execute();
		     if($this -> rowCount()==1){
		           Session::set('islogged',TRUE);
		           Session::set('email',$email);
		           return TRUE;
		     }
		     else {
		         Session::set('islogged',FALSE);
		          return FALSE;}
		    }catch(PDOException $e){
		       echo "Error:".$e->getMessage();
		   }
		}
	}