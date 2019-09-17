<?php
    /*Humans are people who interact with the site. They may be customers, contractors, or employees.*/
    class human
    {
        private $fhonorific;        //Honorific that goes before the name, HRH, Mr. Ms., etc.    
        private $fname;             //First Name
        private $mname;             //Middle Name
        private $lname;             //Last Name
        private $lhonorific;        //Honorific that goes after the name, Ph.D., Esq., etc.
        private $birthdate;         //Birth date of the human in this pattern dd-mmm-yyyy
        private $gender;            //Stated gender. Because trying to pin down the 'correct' gender just makes my hair hurt.
        //Language and nationality are in the human's account with the site.

        function __construct($human) 
        {
        $this->human;
        }
        function getHuman() 
        {
            Return $this->$human;
        }

        //Functions to make visible properties of a human
        
        //Return the full name of the human
        function getFullName()
        {
        Return $fhonorific . ' ' . $fname . ' ' . $mname . ' ' . $lname . ' ' . $lhonorific;
        } 
     }
?>