<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'controllers\\MainController' => 
  array (
  ),
),
  'controllers\\MainController' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\router\\GetAnnotation', "_default", "name"=>"Home")
  ),
  'controllers\\MainController::partnerDetails' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "partner/{name}","methods"=>["get"])
  ),
  'controllers\\MainController::sendMessage' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "sendMessage","methods"=>["post"])
  ),
  'controllers\\MainController::contactForm' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "contactForm","methods"=>["get"], "name"=>"Contact")
  ),
  'controllers\\MainController::partnersList' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "partners","methods"=>["get"], "name"=>"Partners")
  ),
);

