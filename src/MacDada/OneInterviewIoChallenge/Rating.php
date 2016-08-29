<?php

namespace MacDada\OneInterviewIoChallenge;

class Rating
{
    /**
     * @var int
     */
    private $restaurantId;

    /**
     * @var int
     */
    private $rating;

    /**
     * @param int $restaurantId
     * @param int $rating       Within 1-5
     */
    public function __construct($restaurantId, $rating)
    {
        $this->restaurantId = $restaurantId;
        $this->rating = $rating;
    }
}
