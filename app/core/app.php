<?php
class App
{
    protected $controller="home";
    protected $method="index";
    protected $params=[];
    public function __construct()
    {
        $url=$this->parseUrl();
        if(empty($url))
        {
            $url[0]=$this->controller;
            
        }
        if(file_exists('../app/controller/'.$url[0].'.php'))
        {
            $this->controller=$url[0];
            unset($url[0]);
        }
        $this->controller = ucfirst($this->controller);
        require_once "../app/controller/".$this->controller.".php";
        $this->controller=new $this->controller;
        if(isset($url[1]))
        {
            if(method_exists($this->controller, $url[1]))
            {
                $this->method=$url[1];
                unset($url[1]);
            }
        }
        $this->params=$url ? array_values($url):[];
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    public function parseUrl()
    {
        if(isset($_GET['url']))
        {
            return $url=explode("/", filter_var(rtrim($_GET['url'], "/"), FILTER_SANITIZE_URL));
        }
    }
}