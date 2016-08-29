<?php

namespace MacDada\OneInterviewIoChallenge;

use InvalidArgumentException;

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
     * @throws InvalidArgumentException
     */
    public function __construct($restaurantId, $rating)
    {
        $this->setRestaurantId($restaurantId);
        $this->setRating($rating);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf(
            'Rating with restaurant id %d and rating %d',
            $this->restaurantId,
            $this->rating
        );
    }

    /**
     * @param int $restaurantId
     *
     * @throws InvalidArgumentException
     */
    private function setRestaurantId($restaurantId)
    {
        if (!is_int($restaurantId)) {
            throw new InvalidArgumentException(
                sprintf(
                    '$restaurantId must be an integer, %s given',
                    gettype($restaurantId)
                )
            );
        }

        $this->restaurantId = $restaurantId;
    }

    /**
     * @param int $rating
     *
     * @throws InvalidArgumentException
     */
    private function setRating($rating)
    {
        if (!is_int($rating)) {
            throw new InvalidArgumentException(
                sprintf(
                    '$rating must be an integer, %s given',
                    gettype($rating)
                )
            );
        }

        if ($rating < 1 || $rating > 5) {
            throw new InvalidArgumentException(
                sprintf(
                    '$rating must be within 1 and 5, "%" given',
                    $rating
                )
            );
        }

        $this->rating = $rating;
    }
}
