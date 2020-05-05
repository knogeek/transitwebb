<?php
class commethod
{

    public $provider;
    public $name;
    public $mstring;
    public $mparams;

            function __construct($commethod)
            {
            $this->commethod;
            }

        function __destruct()
            {
                //before destroying, put away anything created within the class
                $this = null;
}

        function getcommethod()
            {
                Return $this->$commethod;
            }

}
?>