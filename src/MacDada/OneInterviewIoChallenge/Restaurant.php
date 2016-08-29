<?php

namespace MacDada\OneInterviewIoChallenge;

class Restaurant
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var int
     */
    private $openHour;

    /**
     * @var int
     */
    private $closeHour;

    /**
     * @param int    $id
     * @param string $name
     * @param float  $latitude
     * @param float  $longitude
     * @param int    $openHour  Within 0-23
     * @param int    $closeHour Within 0-23
     */
    public function __construct($id, $name, $latitude, $longitude, $openHour, $closeHour)
    {
        $this->id = $id;
        $this->name = $name;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->openHour = $openHour;
        $this->closeHour = $closeHour;
    }
}
