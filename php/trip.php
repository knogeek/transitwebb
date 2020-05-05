<?php
class trip 
{
        public $name;               //Name of the trip
        public $origin;             //geoloc of trip origin in longitude and latitude
        public $originname;         //Common name of the origin
        public $destination;        //geoloc of trip destination in longitude and latitude
        public $destinationname;    //Common name of the destination
        public $tourguide;          //human performing the role of tour guide
        public $driver;             //human driving the vehicle
        public $travelor;           //human(s) enjoying the tour. This should be an array of humans on the trip.
        public $price;              //Price of trip for each human

        function __construct($trip)
            {
               $this->trip;
            }

        function __destruct()
            {
                //before destroying, put away anything created within the class
                $this = null;
            }

        function getcommethod()
            {
                Return $this->$trip;
            }

}
?>