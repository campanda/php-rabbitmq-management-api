<?php declare(strict_types=1);

namespace RabbitMq\ManagementApi\DTO;

class Exchange {

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $vhost;

    /**
     * @var string
     */
    private $type;

    /**
     * @var bool
     */
    protected $auto_delete;

    /**
     * @var bool
     */
    protected $durable;

    /**
     * @var bool
     */
    protected $internal;

    /**
     * @var ExchangeMessageStats|null
     */
    protected $message_stats;

    /**
     * @var array
     */
    protected $arguments;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Exchange
     */
    public function setName(string $name): Exchange
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getVhost(): ?string
    {
        return $this->vhost;
    }

    /**
     * @param null|string $vhost
     * @return Exchange
     */
    public function setVhost(?string $vhost): Exchange
    {
        $this->vhost = $vhost;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getVirtualHost(): ?string
    {
        return $this->getVhost();
    }

    /**
     * @param null|string $virtualHost
     * @return Exchange
     */
    public function setVirtualHost(?string $virtualHost): Exchange
    {
        return $this->setVirtualHost($virtualHost);
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Exchange
     */
    public function setType(string $type): Exchange
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAutoDelete(): bool
    {
        return $this->auto_delete;
    }

    /**
     * @param bool $auto_delete
     * @return Exchange
     */
    public function setAutoDelete(bool $auto_delete): Exchange
    {
        $this->auto_delete = $auto_delete;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDurable(): bool
    {
        return $this->durable;
    }

    /**
     * @param bool $durable
     * @return Exchange
     */
    public function setDurable(bool $durable): Exchange
    {
        $this->durable = $durable;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInternal(): bool
    {
        return $this->internal;
    }

    /**
     * @param bool $internal
     * @return Exchange
     */
    public function setInternal(bool $internal): Exchange
    {
        $this->internal = $internal;
        return $this;
    }

    /**
     * @return null|ExchangeMessageStats
     */
    public function getMessageStats(): ?ExchangeMessageStats
    {
        return $this->message_stats;
    }

    /**
     * @param null|ExchangeMessageStats $message_stats
     * @return Exchange
     */
    public function setMessageStats(?ExchangeMessageStats $message_stats): Exchange
    {
        $this->message_stats = $message_stats;
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
     * @return Exchange
     */
    public function setArguments(array $arguments): Exchange
    {
        $this->arguments = $arguments;
        return $this;
    }

}