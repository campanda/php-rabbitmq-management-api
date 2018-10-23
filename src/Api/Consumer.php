<?php

namespace RabbitMq\ManagementApi\Api;

use RabbitMq\ManagementApi\DTO\Consumer as ConsumerDTO;

/**
 * Consumer
 *
 * @author Helmut Hoffer von Ankershoffen <hhva@campanda.com>
 */
class Consumer extends AbstractApi
{
    /**
     * A list of all consumers.
     *
     * OR
     *
     * A list of all consumers in a given virtual host.
     *
     * @param null|string $vhost
     * @param bool $hydrate
     * @return ConsumerDTO[]|array
     * @throws \Http\Client\Exception
     */
    public function all(?string $vhost = null, bool $hydrate = false): array
    {
        if ($vhost) {
            if (!$hydrate) {
                return $this->client->send(sprintf('/api/consumers/%s', urlencode($vhost)));
            }
            $json = $this->client->send(sprintf('/api/consumers/%s', urlencode($vhost)),'GET',[],null,false);
            /**
             * @var array $rtn
             */
            $rtn=$this->client->getSerializer()->deserialize($json,ConsumerDTO::class.'[]','json');
            return $rtn;
        } else {
            if (!$hydrate) {
                return $this->client->send('/api/consumers');
            }
            $json = $this->client->send(sprintf('/api/consumers/%s', urlencode($vhost)));
            /**
             * @var array $rtn
             */
            $rtn=$this->client->getSerializer()->deserialize($json,ConsumerDTO::class.'[]','json');
            return $rtn;
        }
    }

}
