<?php

class Request
{
    private $get = [];
    private $post = [];
    
    public function __construct($get = [], $post = [])
    {
        $this->get = $get;
        $this->post = $post;
    }
    
    function post($key, $default = null)
    {
        return isset($this->post[$key]) ? $this->post[$key] : $default;
    }
    
    function get($key, $default = null)
    {
        return isset($this->get[$key]) ? $this->get[$key] : $default;
    }
    
    function isPost()
    {
        return (bool) $this->post;
    }
}