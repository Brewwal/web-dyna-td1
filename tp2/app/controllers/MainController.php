<?php
namespace controllers;
 /**
 * Controller MainController
 * @get("_default", "name"=>"Home")
 **/
class MainController extends ControllerBase{

	public function index(){
		
	}


	/**
	 *@route("partner/{name}","methods"=>["get"])
	**/
	public function partnerDetails($name){
		
		$this->loadView('MainController/partnerDetails.html');

	}


	/**
	 *@route("sendMessage","methods"=>["post"])
	**/
	public function sendMessage(){
		
		$this->loadView('MainController/sendMessage.html');

	}


	/**
	 *@route("contactForm","methods"=>["get"], "name"=>"Contact")
	**/
	public function contactForm(){
		
		$this->loadView('MainController/contactForm.html');

	}


	/**
	 *@route("partners","methods"=>["get"], "name"=>"Partners")
	**/
	public function partnersList(){
		
		$this->loadView('MainController/partnersList.html');

	}

}
