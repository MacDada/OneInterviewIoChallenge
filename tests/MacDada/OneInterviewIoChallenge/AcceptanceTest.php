<?php

namespace MacDada\OneInterviewIoChallenge;

class AcceptanceTest extends \PHPUnit_Framework_TestCase
{
    public function testChallengeExample()
    {
        $restaurants = [
            new Restaurant(0, "Domino's Pizza", 37.7577, -122.4376, 7, 23),
        ];

        $ratings = [
            new Rating(0 ,3),
        ];

        $yelp = new Yelp($restaurants, $ratings);

        $yelp->find([37.7, -122.6], 5, null, false);
    }
}
