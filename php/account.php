<?php
    class account
     {
        //Accounts belong to humans who have registered with Transit Webb. Null or empty owner means they need to register
        public $owner;
        public $accountname;
        public $pwd;
        public $lastchanged;
        public $age;
        public $challengequestion;
        public $challengeanswer;
        public $billdate;
        public $lastpaid;
        public $balance;
        public $emailaddress;
        private $hash = password_hash($pwd, PASSWORD_DEFAULT);

        //include_once toolbox.php;

        function __construct($account)
            {
            $this->account;
            }

        function __destruct()
            {
                //before destroying, put away anything created within the class
                $this = null;
}

        function getAccount()
            {
                If (authenticate())
                    Return $this->$account;
                else die;
            }


        //Assume the authentication won't succeed.
        function authenticate($accountname, $pwd)
            {

            $ReturnVal = false;

            if(password_verify($pwd, $hash))
            {

                if(isset($_SERVER['PHP_AUTH_USER']) && 
                   isset($_SERVER['PHP_AUTH_PW']))
                {
                    if ($_SERVER['PHP_AUTH_USER'] === $accountname &&
                        $_SERVER['PHP_AUTH_PW'] === $pwd)
                        //Make an account object with the properties populated
                        $ReturnVal = true;
                }
            }

            return $ReturnVal;

            }
     }

?>