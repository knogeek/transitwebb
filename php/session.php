<?php
class session
    //A user's session. Top level class running everything else. By Alan Webb
{
    //Declarations
    Public $CurrentUser = new user;
    Public $SessionID;                  //The thought is that the session id is one of two authentication keys needed to use the app
    Public $StartTime;                  //Time session started
    Public $Timeout;                    //Number of seconds until session times out

    private function __construct($session)
    {
        $this->session;
    }

    private Function Start()
    {
        $RetVal = false;
        //Do everything needed to start a session
        try
        {
            $StartTime=time();
        }
        catch(Exception $e)
        {
            die("Something failed: " . $e);
        }
        Finally
        {
            Return $RetVal;
        }
        //
    }

    //Only return a session if the user authenticates
    public function authenticate($accountname, $pwd)
    {
        //Assume failure
        $RetVal = false;

        //look up the account name and password and if found start
        Try
        {
            //pwd is stored as a hash in userlist
            $conn = new mysqli($un, $pw, $db);
            if(!$conn->connect_error)
            {
                //We are good
                $sqlstring = "SELECT ACCOUNTNAME FROM USERLIST WHERE ACCOUNTNAME='$un';";

                echo $sqlstring;

                $result=$conn->query($sqlstring);

                //User is supposed to have an account to connect. There should not be more than one row in the result

                If(!$result)
                {
                    die("Getting the user's account failed");
                }
                elseif($result->num_rows>1)
                {
                    die("Too many accounts found");
                }
                else //We found the account
                {
                    //Populate properties of user
                    $CurrentUser->accountname=$un;
                    //And so on

                    $RetVal=start();

                }
            }

            Return $RetVal;

        }
        
        Catch(Exception $e)
        {
            echo "Ruh roh: " . $e->getMessage();
            die;
        }

        Finally
        {
            //put away the database connection
            $result->close();
            $conn->close();
            Return $RetVal;
        }
    }

    //Always allow the class to be destroyed
    function __destruct()
        {
            //before destroying, put away anything created within the class
            $this = null;
        }

}
?>