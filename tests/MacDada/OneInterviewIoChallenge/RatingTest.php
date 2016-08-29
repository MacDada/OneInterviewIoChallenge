<?php

namespace MacDada\OneInterviewIoChallenge;

class RatingTest extends \PHPUnit_Framework_TestCase
{
    public function testCastingToString()
    {
        $rating = new Rating(17, 3);

        $this->assertSame('Rating with restaurant id 17 and rating 3', (string) $rating);
    }

    /**
     * @return array[]
     */
    public function provideInvalidRatings()
    {
        return [
            [17, 0, 'rating must not be lower than one'],
            [17, 6, 'test rating must not be larger than five'],
            [17, '4', 'rating must be an integer'],
        ];
    }

    /**
     * @param mixed $restaurantId
     * @param mixed $rating
     *
     * @dataProvider provideInvalidRatings
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage rating
     */
    public function testConstructingWithInvalidRating($restaurantId, $rating)
    {
        new Rating($restaurantId, $rating);
    }

    /**
     * @return array[]
     */
    public function provideInvalidRestaurantIds()
    {
        return [
            ['17', 4, 'restaurantId must be an integer'],
        ];
    }

    /**
     * @param mixed $restaurantId
     * @param mixed $rating
     *
     * @dataProvider provideInvalidRestaurantIds
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage restaurantId
     */
    public function testConstructingWithInvalidRestaurantId($restaurantId, $rating)
    {
        new Rating($restaurantId, $rating);
    }
}
