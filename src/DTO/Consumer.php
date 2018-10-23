<?php declare(strict_types=1);

namespace RabbitMq\ManagementApi\DTO;

class Consumer {

    /**
     * @var string
     */
    protected $consumer_tag;

    /**
     * @var int
     */
    protected $prefetch_count;

    /**
     * @var bool
     */
    protected $ack_required;

    /**
     * @var bool
     */
    protected $exclusive;

    /**
     * @var array
     */
    protected $arguments;

    /**
     * @var ConsumerChannelDetails
     */
    protected $channel_details;

    /**
     * @var ConsumerQueue
     */
    protected $queue;

    /**
     * @return string
     */
    public function getConsumerTag(): string
    {
        return $this->consumer_tag;
    }

    /**
     * @param string $consumer_tag
     */
    public function setConsumerTag(string $consumer_tag): void
    {
        $this->consumer_tag = $consumer_tag;
    }

    /**
     * @return int
     */
    public function getPrefetchCount(): int
    {
        return $this->prefetch_count;
    }

    /**
     * @param int $prefetch_count
     * @return Consumer
     */
    public function setPrefetchCount(int $prefetch_count): Consumer
    {
        $this->prefetch_count = $prefetch_count;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAckRequired(): bool
    {
        return $this->ack_required;
    }

    /**
     * @param bool $ack_required
     * @return Consumer
     */
    public function setAckRequired(bool $ack_required): Consumer
    {
        $this->ack_required = $ack_required;
        return $this;
    }

    /**
     * @return bool
     */
    public function isExclusive(): bool
    {
        return $this->exclusive;
    }

    /**
     * @param bool $exclusive
     * @return Consumer
     */
    public function setExclusive(bool $exclusive): Consumer
    {
        $this->exclusive = $exclusive;
        return $this;
    }

    /**
     * @return array
     */
    public function getArguments(): array
    {
        return $this->arguments;
    }

    /**
     * @param array $arguments
     * @return Consumer
     */
    public function setArguments(array $arguments): Consumer
    {
        $this->arguments = $arguments;
        return $this;
    }

    /**
     * @return ConsumerChannelDetails
     */
    public function getChannelDetails(): ConsumerChannelDetails
    {
        return $this->channel_details;
    }

    /**
     * @param ConsumerChannelDetails $channel_details
     * @return Consumer
     */
    public function setChannelDetails(ConsumerChannelDetails $channel_details): Consumer
    {
        $this->channel_details = $channel_details;
        return $this;
    }

    /**
     * @return ConsumerQueue
     */
    public function getQueue(): ConsumerQueue
    {
        return $this->queue;
    }

    /**
     * @param ConsumerQueue $queue
     * @return Consumer
     */
    public function setQueue(ConsumerQueue $queue): Consumer
    {
        $this->queue = $queue;
        return $this;
    }


}