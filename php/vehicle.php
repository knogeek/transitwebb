<?php
class vehicle
{
    public $mfg;                //Manufacturer
    public $vin;                //Vehicle ID Number
    public $model;              //Model number
    public $yearmfg;            //Year vehicle was manufactured
	public $licenseplate;       //License plate or tail number
	public $lastinspected;      //Date vehicle was last inspected
    public $inspectionyears;    //Single precision decimal indicating how many hours between inspections
	public $acquired;           //Date acquired
    public $warrantyexpires;    //Date warranty expires
	public $depreciationyears;  //Single precision decimal indicating how long the vehicle will be depreciated to zero. Usually 1, 3 or 5 years.

    
    function __construct($vehicle)
        {
            $this->vehicle;
        }

    function __destruct()
        {
            //before destroying, put away anything created within the class
            $this = null;
        }

    function getvehicle()
        {
            Return $this->$vehicle;
        }

}
?>