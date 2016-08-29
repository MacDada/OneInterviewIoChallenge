<?php

namespace MacDada\OneInterviewIoChallenge;

class Yelp
{
    private $restaurants;

    private $ratings;

    public function __construct($restaurants, $ratings)
    {
        $this->restaurants = $restaurants;
        $this->ratings = $ratings;
    }

    /**
     * Returns list of Restaurant within radius.
     *
     * @param array    $coordinates  [latitude, longitude]
     * @param int      $radius       Kilometers
     * @param int|null $diningHour   If null, find any restaurant in radius.
     *                               Otherwise return list of open restaurants at specified hour.
     * @param bool     $sortByRating If True, sort result in descending order, highest rated first.
     */
    public function find(
        array $coordinates,
        $radius,
        $diningHour = null,
        $sortByRating = false
    ) {
        throw new \BadMethodCallException('Not implemented yet');
    }
}
