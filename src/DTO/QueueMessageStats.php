<?php declare(strict_types=1);

namespace RabbitMq\ManagementApi\DTO;

class QueueMessageStats {

    /**
     * @var int
     */
    protected $deliver_get;

    /**
     * @var CountDetails
     */
    protected $deliver_get_details;

    /**
     * @var int
     */
    protected $ack;

    /**
     * @var CountDetails
     */
    protected $ack_details;

    /**
     * @var int
     */
    protected $redeliver;

    /**
     * @var CountDetails
     */
    protected $redeliver_details;

    /**
     * @var int
     */
    protected $deliver_no_ack;

    /**
     * @var CountDetails
     */
    protected $deliver_no_ack_details;

    /**
     * @var int
     */
    protected $get_no_ack;

    /**
     * @var CountDetails
     */
    protected $get_no_ack_details;

    /**
     * @var int
     */
    protected $get;

    /**
     * @var CountDetails
     */
    protected $get_details;

    /**
     * @var int
     */
    protected $publish;

    /**
     * @var CountDetails
     */
    protected $publish_details;

    /**
     * @return int
     */
    public function getDeliverGet(): int
    {
        return $this->deliver_get;
    }

    /**
     * @param int $deliver_get
     * @return QueueMessageStats
     */
    public function setDeliverGet(int $deliver_get): QueueMessageStats
    {
        $this->deliver_get = $deliver_get;
        return $this;
    }

    /**
     * @return CountDetails
     */
    public function getDeliverGetDetails(): CountDetails
    {
        return $this->deliver_get_details;
    }

    /**
     * @param CountDetails $deliver_get_details
     * @return QueueMessageStats
     */
    public function setDeliverGetDetails(CountDetails $deliver_get_details): QueueMessageStats
    {
        $this->deliver_get_details = $deliver_get_details;
        return $this;
    }

    /**
     * @return int
     */
    public function getAck(): int
    {
        return $this->ack;
    }

    /**
     * @param int $ack
     * @return QueueMessageStats
     */
    public function setAck(int $ack): QueueMessageStats
    {
        $this->ack = $ack;
        return $this;
    }

    /**
     * @return CountDetails
     */
    public function getAckDetails(): CountDetails
    {
        return $this->ack_details;
    }

    /**
     * @param CountDetails $ack_details
     * @return QueueMessageStats
     */
    public function setAckDetails(CountDetails $ack_details): QueueMessageStats
    {
        $this->ack_details = $ack_details;
        return $this;
    }

    /**
     * @return int
     */
    public function getRedeliver(): int
    {
        return $this->redeliver;
    }

    /**
     * @param int $redeliver
     * @return QueueMessageStats
     */
    public function setRedeliver(int $redeliver): QueueMessageStats
    {
        $this->redeliver = $redeliver;
        return $this;
    }

    /**
     * @return CountDetails
     */
    public function getRedeliverDetails(): CountDetails
    {
        return $this->redeliver_details;
    }

    /**
     * @param CountDetails $redeliver_details
     * @return QueueMessageStats
     */
    public function setRedeliverDetails(CountDetails $redeliver_details): QueueMessageStats
    {
        $this->redeliver_details = $redeliver_details;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliverNoAck(): int
    {
        return $this->deliver_no_ack;
    }

    /**
     * @param int $deliver_no_ack
     * @return QueueMessageStats
     */
    public function setDeliverNoAck(int $deliver_no_ack): QueueMessageStats
    {
        $this->deliver_no_ack = $deliver_no_ack;
        return $this;
    }

    /**
     * @return CountDetails
     */
    public function getDeliverNoAckDetails(): CountDetails
    {
        return $this->deliver_no_ack_details;
    }

    /**
     * @param CountDetails $deliver_no_ack_details
     * @return QueueMessageStats
     */
    public function setDeliverNoAckDetails(CountDetails $deliver_no_ack_details): QueueMessageStats
    {
        $this->deliver_no_ack_details = $deliver_no_ack_details;
        return $this;
    }

    /**
     * @return int
     */
    public function getGetNoAck(): int
    {
        return $this->get_no_ack;
    }

    /**
     * @param int $get_no_ack
     * @return QueueMessageStats
     */
    public function setGetNoAck(int $get_no_ack): QueueMessageStats
    {
        $this->get_no_ack = $get_no_ack;
        return $this;
    }

    /**
     * @return CountDetails
     */
    public function getGetNoAckDetails(): CountDetails
    {
        return $this->get_no_ack_details;
    }

    /**
     * @param CountDetails $get_no_ack_details
     * @return QueueMessageStats
     */
    public function setGetNoAckDetails(CountDetails $get_no_ack_details): QueueMessageStats
    {
        $this->get_no_ack_details = $get_no_ack_details;
        return $this;
    }

    /**
     * @return int
     */
    public function getGet(): int
    {
        return $this->get;
    }

    /**
     * @param int $get
     * @return QueueMessageStats
     */
    public function setGet(int $get): QueueMessageStats
    {
        $this->get = $get;
        return $this;
    }

    /**
     * @return CountDetails
     */
    public function getGetDetails(): CountDetails
    {
        return $this->get_details;
    }

    /**
     * @param CountDetails $get_details
     * @return QueueMessageStats
     */
    public function setGetDetails(CountDetails $get_details): QueueMessageStats
    {
        $this->get_details = $get_details;
        return $this;
    }

    /**
     * @return int
     */
    public function getPublish(): int
    {
        return $this->publish;
    }

    /**
     * @param int $publish
     * @return QueueMessageStats
     */
    public function setPublish(int $publish): QueueMessageStats
    {
        $this->publish = $publish;
        return $this;
    }

    /**
     * @return CountDetails
     */
    public function getPublishDetails(): CountDetails
    {
        return $this->publish_details;
    }

    /**
     * @param CountDetails $publish_details
     * @return QueueMessageStats
     */
    public function setPublishDetails(CountDetails $publish_details): QueueMessageStats
    {
        $this->publish_details = $publish_details;
        return $this;
    }

}