<?php

namespace RabbitMq\ManagementApi\Api;

use RabbitMq\ManagementApi\Client;

/**
 * @author Richard Fullmer <richard.fullmer@opensoftdev.com>
 */
class AbstractApi
{
    /**
     * @var Client
     */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
