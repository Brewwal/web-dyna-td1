<?php
namespace controllers;

use ws\controllers\AbstractWsController;

class MainController extends AbstractWsController{
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
		
	    $this->loadView('MainController/partnerDetails.html',['name'=>$name]);

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
