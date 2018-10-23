<?php declare(strict_types=1);

namespace RabbitMq\ManagementApi\DTO;

class Binding {

    /**
     * @var string
     */
    protected $source;

    /**
     * @var string|null
     */
    protected $vhost;

    /**
     * @var string
     */
    protected $destination;

    /**
     * @var string
     */
    protected $destination_type;
    const DESTINATION_TYPE_QUEUE='queue';

    /**
     * @var string
     */
    protected $routing_key;

    /**
     * @var string
     */
    protected $properties_key;

    /**
     * @var []
     */
    protected $arguments;

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return Binding
     */
    public function setSource(string $source): Binding
    {
        $this->source = $source;
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
     * @return Binding
     */
    public function setVhost(?string $vhost): Binding
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
     * @return Binding
     */
    public function setVirtualHost(?string $virtualHost): Binding
    {
        return $this->setVirtualHost($virtualHost);
    }

    /**
     * @return string
     */
    public function getDestination(): string
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     * @return Binding
     */
    public function setDestination(string $destination): Binding
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationType(): string
    {
        return $this->destination_type;
    }

    /**
     * @param string $destination_type
     * @return Binding
     */
    public function setDestinationType(string $destination_type): Binding
    {
        $this->destination_type = $destination_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoutingKey(): string
    {
        return $this->routing_key;
    }

    /**
     * @param string $routing_key
     * @return Binding
     */
    public function setRoutingKey(string $routing_key): Binding
    {
        $this->routing_key = $routing_key;
        return $this;
    }

    /**
     * @return string
     */
    public function getPropertiesKey(): string
    {
        return $this->properties_key;
    }

    /**
     * @param string $properties_key
     * @return Binding
     */
    public function setPropertiesKey(string $properties_key): Binding
    {
        $this->properties_key = $properties_key;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    /**
     * @param mixed $arguments
     * @return Binding
     */
    public function setArguments($arguments)
    {
        $this->arguments = $arguments;
        return $this;
    }

}