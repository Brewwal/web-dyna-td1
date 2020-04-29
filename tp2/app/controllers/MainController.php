<?php
namespace controllers;
 
class MainController extends ControllerBase{
    /**
     * Controller MainController
     * @get("_default", "name"=>"Home")
     **/
	public function index(){
		
	}


	/**
	 *@route("MainController/partner/{name}","methods"=>["get"])
	**/
	public function partnerDetails($name){
		
		$this->loadView('MainController/partnerDetails.html');

	}


	/**
	 *@route("MainController/sendMessage","methods"=>["post"])
	**/
	public function sendMessage(){
		
		$this->loadView('MainController/sendMessage.html');

	}


	/**
	 *@route("MainController/contact","methods"=>["get"], "name"=>"Contact")
	**/
	public function contactForm(){
		
		$this->loadView('MainController/contactForm.html');

	}


	/**
	 *@route("MainController/partners","methods"=>["get"], "name"=>"Partners")
	**/
	public function partnersList(){
		
		$this->loadView('MainController/partnersList.html');

	}

}
