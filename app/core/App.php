<?php

class App
{
  protected $controller = 'UserController';
  
  protected $method = 'index';
  
  protected $params = [];
  
  public function __construct()
  {
    $url = $this->parseUrl();
    
    if ($url && file_exists('../app/controllers/' . $url[0] . 'Controller.php')) 
    {
      $this->controller = $url[0] . 'Controller';
      unset($url[0]);
    }
    
    require_once('../app/controllers/' . $this->controller . '.php');
    $this->controller = new $this->controller;
    
    if (isset($url[1])) 
    {
      if (method_exists($this->controller, $url[1])) 
      {
        $this->method = $url[1];
        unset($url[1]);
      }
    }
    
    $this->params = $url ? array_values($url) : [];
    
    call_user_func_array([$this->controller, $this->method], $this->params);
  }
  
  public function parseUrl()
  {
    if (isset($_GET['url'])) 
    {
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      return explode('/', $url);
    }
  }
}
