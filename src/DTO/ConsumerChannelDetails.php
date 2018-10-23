<?php declare(strict_types=1);

namespace RabbitMq\ManagementApi\DTO;

class ConsumerChannelDetails {

    /**
     * @var string|null
     */
    private $peer_host;

    /**
     * @var int|null
     */
    private $peer_port;

    /**
     * @var string|null
     */
    private $connection_name;

    /**
     * @var string|null
     */
    private $user;

    /**
     * @var int|null
     */
    private $number;

    /**
     * @var string|null
     */
    private $node;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @return null|string
     */
    public function getPeerHost(): ?string
    {
        return $this->peer_host;
    }

    /**
     * @param null|string $peer_host
     * @return ConsumerChannelDetails
     */
    public function setPeerHost(?string $peer_host): ConsumerChannelDetails
    {
        $this->peer_host = $peer_host;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPeerPort(): ?int
    {
        return $this->peer_port;
    }

    /**
     * @param int|null $peer_port
     * @return ConsumerChannelDetails
     */
    public function setPeerPort(?int $peer_port): ConsumerChannelDetails
    {
        $this->peer_port = $peer_port;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getConnectionName(): ?string
    {
        return $this->connection_name;
    }

    /**
     * @param null|string $connection_name
     * @return ConsumerChannelDetails
     */
    public function setConnectionName(?string $connection_name): ConsumerChannelDetails
    {
        $this->connection_name = $connection_name;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * @param null|string $user
     * @return ConsumerChannelDetails
     */
    public function setUser(?string $user): ConsumerChannelDetails
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @param int|null $number
     * @return ConsumerChannelDetails
     */
    public function setNumber(?int $number): ConsumerChannelDetails
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNode(): ?string
    {
        return $this->node;
    }

    /**
     * @param null|string $node
     * @return ConsumerChannelDetails
     */
    public function setNode(?string $node): ConsumerChannelDetails
    {
        $this->node = $node;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     * @return ConsumerChannelDetails
     */
    public function setName(?string $name): ConsumerChannelDetails
    {
        $this->name = $name;
        return $this;
    }

}