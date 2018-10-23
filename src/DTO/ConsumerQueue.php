<?php declare(strict_types=1);

namespace RabbitMq\ManagementApi\DTO;

class ConsumerQueue {

    /**
     * @var string|null
     */
    private $vhost;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @return null|string
     */
    public function getVhost(): ?string
    {
        return $this->vhost;
    }

    /**
     * @param null|string $vhost
     * @return ConsumerQueue
     */
    public function setVhost(?string $vhost): ConsumerQueue
    {
        $this->vhost = $vhost;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getVirtualHost(): ?string
    {
        return $this->getVhost();
    }

    /**
     * @param null|string $virtualHost
     * @return ConsumerQueue
     */
    public function setVirtualHost(?string $virtualHost): ConsumerQueue
    {
       return $this->setVhost($virtualHost);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ConsumerQueue
     */
    public function setName(string $name): ConsumerQueue
    {
        $this->name = $name;
        return $this;
    }

}