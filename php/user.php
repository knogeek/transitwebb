<?php

class user extends human
    {
     //Properties of a human who is using the app.   
     public $accountname;      //Account name of human
     public $pwd;              //Human's password in this app
     public $language;         //Language used by human in this app
     public $nationality;      //Nationality of the human

    function __construct($user)
        {

            $this->user;
            
        }

    function __destruct()
        {
            //before destroying, put away anything created within the class
            $this = null;
        }

    function getAccount()
        {
            Return $this->$user;
        }
    }

?>