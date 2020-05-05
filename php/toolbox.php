<?php
    class toolbox 
    {
        /*Scrub string of insecure characters. Originally published in Learning PHP, MySQL & JavaScript by Robin Nixon
         O'Reilly, publisher, copyright 2018 Robin Nixon */

        function cleanString($var)
        {
            If(get_magic_qoutes_gpc())
                $var = stripslashes($var);
                $var=strip_tags($var);
                $var=htmlentities($var);

                return $var;
        }
        function cleanSQL($connection, $var)
        {
            $var = $connection->real_escape_string($var);
            $var = cleanstring($var);
            return $var;
        }
    }
?>