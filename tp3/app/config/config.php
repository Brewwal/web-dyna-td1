<?php
return array(
	"siteUrl"=>"http://127.0.0.1:8090/",
	"database"=>array(
			"type"=>"mysql",
			"dbName"=>"messagerie",
			"serverName"=>"127.0.0.1",
			"port"=>3306,
			"user"=>"root",
			"password"=>"",
			"options"=>array(),
			"cache"=>false
			),
	"sessionName"=>"s5eb3f646c0f94",
	"namespaces"=>array(),
	"templateEngine"=>"Ubiquity\\views\\engine\\Twig",
	"templateEngineOptions"=>array(
			"cache"=>false
			),
	"test"=>false,
	"debug"=>true,
	"logger"=>function (){return new \Ubiquity\log\libraries\UMonolog("tp3",\Monolog\Logger::INFO);},
	"di"=>array(
			"@exec"=>array(
					"jquery"=>function ($controller){
						return \Ubiquity\core\Framework::diSemantic($controller);
					}
					)
			),
	"cache"=>array(
			"directory"=>"cache/",
			"system"=>"Ubiquity\\cache\\system\\ArrayCache",
			"params"=>array()
			),
	"mvcNS"=>array(
			"models"=>"models",
			"controllers"=>"controllers",
			"rest"=>""
			),
	"isRest"=>function (){
			return \Ubiquity\utils\http\URequest::getUrlParts()[0]==="rest";
		}
	);