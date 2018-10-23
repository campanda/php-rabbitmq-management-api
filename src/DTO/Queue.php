<?php declare(strict_types=1);

namespace RabbitMq\ManagementApi\DTO;

class Queue {

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $vhost;

    /**
     * @var string
     */
    protected $node;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var bool
     */
    protected $exclusive;

    /**
     * @var bool
     */
    protected $auto_delete;

    /**
     * @var bool
     */
    protected $durable;

    /**
     * @var int
     */
    protected $consumers;

    /**
     * @var float|null
     */
    protected $consumer_utilisation;

    /**
     * string
     */
    protected $idle_since;

    /**
     * @var int
     */
    protected $messages;

    /**
     * @var CountDetails
     */
    protected $messages_details;

    /**
     * @var int
     */
    protected $messages_unacknowledged;

    /**
     * @var CountDetails
     */
    protected $messages_unacknowledged_details;

    /**
     * @var int
     */
    protected $messages_ready;

    /**
     * @var CountDetails
     */
    protected $messages_ready_details;

    /**
     * @var int
     */
    protected $reductions;

    /**
     * @var CountDetails
     */
    protected $reductions_details;

    /**
     * @var QueueMessageStats|null
     */
    protected $message_stats;

    /**
     * @var int
     */
    protected $message_bytes_paged_out;

    /**
     * @var int
     */
    protected $messages_paged_out;

    /**
     * @var int
     */
    protected $memory;

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
     * @return Queue
     */
    public function setName(string $name): Queue
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
     * @return Queue
     */
    public function setVhost(?string $vhost): Queue
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
     * @return Queue
     */
    public function setVirtualHost(?string $virtualHost): Queue
    {
        return $this->setVirtualHost($virtualHost);
    }

    /**
     * @return string
     */
    public function getNode(): string
    {
        return $this->node;
    }

    /**
     * @param string $node
     * @return Queue
     */
    public function setNode(string $node): Queue
    {
        $this->node = $node;
        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return Queue
     */
    public function setState(string $state): Queue
    {
        $this->state = $state;
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
     * @return Queue
     */
    public function setExclusive(bool $exclusive): Queue
    {
        $this->exclusive = $exclusive;
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
     * @return Queue
     */
    public function setAutoDelete(bool $auto_delete): Queue
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
     * @return Queue
     */
    public function setDurable(bool $durable): Queue
    {
        $this->durable = $durable;
        return $this;
    }

    /**
     * @return int
     */
    public function getConsumers(): int
    {
        return $this->consumers;
    }

    /**
     * @param int $consumers
     * @return Queue
     */
    public function setConsumers(int $consumers): Queue
    {
        $this->consumers = $consumers;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getConsumerUtilisation(): ?float
    {
        return $this->consumer_utilisation;
    }

    /**
     * @param float|null $consumer_utilisation
     * @return Queue
     */
    public function setConsumerUtilisation(?float $consumer_utilisation): Queue
    {
        $this->consumer_utilisation = $consumer_utilisation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdleSince()
    {
        return $this->idle_since;
    }

    /**
     * @param mixed $idle_since
     * @return Queue
     */
    public function setIdleSince($idle_since)
    {
        $this->idle_since = $idle_since;
        return $this;
    }

    /**
     * @return int
     */
    public function getMessages(): int
    {
        return $this->messages;
    }

    /**
     * @param int $messages
     * @return Queue
     */
    public function setMessages(int $messages): Queue
    {
        $this->messages = $messages;
        return $this;
    }

    /**
     * @return CountDetails
     */
    public function getMessagesDetails(): CountDetails
    {
        return $this->messages_details;
    }

    /**
     * @param CountDetails $messages_details
     * @return Queue
     */
    public function setMessagesDetails(CountDetails $messages_details): Queue
    {
        $this->messages_details = $messages_details;
        return $this;
    }

    /**
     * @return int
     */
    public function getMessagesUnacknowledged(): int
    {
        return $this->messages_unacknowledged;
    }

    /**
     * @param int $messages_unacknowledged
     * @return Queue
     */
    public function setMessagesUnacknowledged(int $messages_unacknowledged): Queue
    {
        $this->messages_unacknowledged = $messages_unacknowledged;
        return $this;
    }

    /**
     * @return CountDetails
     */
    public function getMessagesUnacknowledgedDetails(): CountDetails
    {
        return $this->messages_unacknowledged_details;
    }

    /**
     * @param CountDetails $messages_unacknowledged_details
     * @return Queue
     */
    public function setMessagesUnacknowledgedDetails(CountDetails $messages_unacknowledged_details): Queue
    {
        $this->messages_unacknowledged_details = $messages_unacknowledged_details;
        return $this;
    }

    /**
     * @return int
     */
    public function getMessagesReady(): int
    {
        return $this->messages_ready;
    }

    /**
     * @param int $messages_ready
     * @return Queue
     */
    public function setMessagesReady(int $messages_ready): Queue
    {
        $this->messages_ready = $messages_ready;
        return $this;
    }

    /**
     * @return CountDetails
     */
    public function getMessagesReadyDetails(): CountDetails
    {
        return $this->messages_ready_details;
    }

    /**
     * @param CountDetails $messages_ready_details
     * @return Queue
     */
    public function setMessagesReadyDetails(CountDetails $messages_ready_details): Queue
    {
        $this->messages_ready_details = $messages_ready_details;
        return $this;
    }

    /**
     * @return int
     */
    public function getReductions(): int
    {
        return $this->reductions;
    }

    /**
     * @param int $reductions
     * @return Queue
     */
    public function setReductions(int $reductions): Queue
    {
        $this->reductions = $reductions;
        return $this;
    }

    /**
     * @return CountDetails
     */
    public function getReductionsDetails(): CountDetails
    {
        return $this->reductions_details;
    }

    /**
     * @param CountDetails $reductions_details
     * @return Queue
     */
    public function setReductionsDetails(CountDetails $reductions_details): Queue
    {
        $this->reductions_details = $reductions_details;
        return $this;
    }

    /**
     * @return null|QueueMessageStats
     */
    public function getMessageStats(): ?QueueMessageStats
    {
        return $this->message_stats;
    }

    /**
     * @param null|QueueMessageStats $message_stats
     * @return Queue
     */
    public function setMessageStats(?QueueMessageStats $message_stats): Queue
    {
        $this->message_stats = $message_stats;
        return $this;
    }

    /**
     * @return int
     */
    public function getMessageBytesPagedOut(): int
    {
        return $this->message_bytes_paged_out;
    }

    /**
     * @param int $message_bytes_paged_out
     * @return Queue
     */
    public function setMessageBytesPagedOut(int $message_bytes_paged_out): Queue
    {
        $this->message_bytes_paged_out = $message_bytes_paged_out;
        return $this;
    }

    /**
     * @return int
     */
    public function getMessagesPagedOut(): int
    {
        return $this->messages_paged_out;
    }

    /**
     * @param int $messages_paged_out
     * @return Queue
     */
    public function setMessagesPagedOut(int $messages_paged_out): Queue
    {
        $this->messages_paged_out = $messages_paged_out;
        return $this;
    }

    /**
     * @return int
     */
    public function getMemory(): int
    {
        return $this->memory;
    }

    /**
     * @param int $memory
     * @return Queue
     */
    public function setMemory(int $memory): Queue
    {
        $this->memory = $memory;
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
     * @return Queue
     */
    public function setArguments(array $arguments): Queue
    {
        $this->arguments = $arguments;
        return $this;
    }

}