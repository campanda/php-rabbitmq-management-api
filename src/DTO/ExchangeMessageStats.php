<?php declare(strict_types=1);

namespace RabbitMq\ManagementApi\DTO;

class ExchangeMessageStats {

    /**
     * @var int
     */
    protected $publish_in;

    /**
     * @var CountDetails
     */
    protected $publish_in_details;


    /**
     * @var int
     */
    protected $publish_out;

    /**
     * @var CountDetails
     */
    protected $publish_out_details;

    /**
     * @return int
     */
    public function getPublishIn(): int
    {
        return $this->publish_in;
    }

    /**
     * @param int $publish_in
     * @return ExchangeMessageStats
     */
    public function setPublishIn(int $publish_in): ExchangeMessageStats
    {
        $this->publish_in = $publish_in;
        return $this;
    }

    /**
     * @return CountDetails
     */
    public function getPublishInDetails(): CountDetails
    {
        return $this->publish_in_details;
    }

    /**
     * @param CountDetails $publish_in_details
     * @return ExchangeMessageStats
     */
    public function setPublishInDetails(CountDetails $publish_in_details): ExchangeMessageStats
    {
        $this->publish_in_details = $publish_in_details;
        return $this;
    }

    /**
     * @return int
     */
    public function getPublishOut(): int
    {
        return $this->publish_out;
    }

    /**
     * @param int $publish_out
     * @return ExchangeMessageStats
     */
    public function setPublishOut(int $publish_out): ExchangeMessageStats
    {
        $this->publish_out = $publish_out;
        return $this;
    }

    /**
     * @return CountDetails
     */
    public function getPublishOutDetails(): CountDetails
    {
        return $this->publish_out_details;
    }

    /**
     * @param CountDetails $publish_out_details
     * @return ExchangeMessageStats
     */
    public function setPublishOutDetails(CountDetails $publish_out_details): ExchangeMessageStats
    {
        $this->publish_out_details = $publish_out_details;
        return $this;
    }

}