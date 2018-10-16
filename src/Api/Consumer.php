<?php

namespace RabbitMq\ManagementApi\Api;

use RabbitMq\ManagementApi\Exception\InvalidArgumentException;

/**
 * Exchange
 *
 * @author Richard Fullmer <richard.fullmer@opensoftdev.com>
 */
class Consumer extends AbstractApi
{
    /**
     * A list of all exchanges.
     *
     * OR
     *
     * A list of all exchanges in a given virtual host.
     *
     * @param null|string $vhost
     * @return array
     */
    public function all($vhost = null)
    {
        if ($vhost) {
            return $this->client->send(sprintf('/api/consumers/%s', urlencode($vhost)));
        } else {
            return $this->client->send('/api/consumers');
        }
    }

    /**
     * An individual exchange.
     *
     * @param string $vhost
     * @param string $name
     * @return array
     */
    public function get($vhost, $name)
    {
        return $this->client->send(sprintf('/api/consumers/%s/%s', urlencode($vhost), urlencode($name)));
    }
}
