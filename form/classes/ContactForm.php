<?php

class ContactForm
{
    private $request;
    
    public $username;
    public $email;
    public $message;
    
    public function __construct(Request $request)
    {
        $this->request = $request;
        
        $this->username = $this->request->post('username');
        $this->email = $this->request->post('email');
        $this->message = $this->request->post('message');
    }
    
    public function isValid()
    {
        return trim($this->username) != '' &&  trim($this->email) &&  trim($this->message);
    }
}