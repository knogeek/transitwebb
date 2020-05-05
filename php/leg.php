<?php
class leg 
{
    public $trip;		        //trip for this leg
    public $legno;		        //Sequence number of the leg on the trip
    public $scheduledstart;     //Scheduled start of the leg
    public $actualstart;        //Actual start of the leg ddmmmyyyyhhnn
    public $scheduledend;       //Scheduled end of the leg ddmmmyyyyhhnn
    public $actualend;          //Actual end of the leg ddmmmyyyyhhnn
    public $origin;             //geoloc of trip origin
    public $destination;        //geoloc of trip destination

    function __construct($trip)
        {
            $this->trip;
        }

    function __destruct()
        {
            //before destroying, put away anything created within the class
            $this = null;
        }

    function gettrip()
        {
            Return $this->$trip;
        }

}
?>