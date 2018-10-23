<?php declare(strict_types=1);

namespace RabbitMq\ManagementApi\DTO;

class CountDetails {

    /**
     * @var float
     */
    protected $rate;

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     * @return CountDetails
     */
    public function setRate(float $rate): CountDetails
    {
        $this->rate = $rate;
        return $this;
    }
}