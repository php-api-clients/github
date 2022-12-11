<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class HookDeliveryItem
{
    public const SCHEMA_TITLE = 'Simple webhook delivery';
    public const SCHEMA_DESCRIPTION = 'Delivery made by a webhook, without request and response information.';
    /**
     * Unique identifier of the webhook delivery.
     */
    private int $id;
    /**
     * Unique identifier for the event (shared with all deliveries for all webhooks that subscribe to this event).
     */
    private string $guid;
    /**
     * Time when the webhook delivery occurred.
     */
    private string $delivered_at;
    /**
     * Whether the webhook delivery is a redelivery.
     */
    private bool $redelivery;
    /**
     * Time spent delivering.
     */
    private int $duration;
    /**
     * Describes the response returned after attempting the delivery.
     */
    private string $status;
    /**
     * Status code received when delivery was made.
     */
    private int $status_code;
    /**
     * The event that triggered the delivery.
     */
    private string $event;
    /**
     * The type of activity for the event that triggered the delivery.
     */
    private $action;
    /**
     * The id of the GitHub App installation associated with this event.
     */
    private $installation_id;
    /**
     * The id of the repository associated with this event.
     */
    private $repository_id;
    /**
     * Unique identifier of the webhook delivery.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * Unique identifier for the event (shared with all deliveries for all webhooks that subscribe to this event).
     */
    public function guid() : string
    {
        return $this->guid;
    }
    /**
     * Time when the webhook delivery occurred.
     */
    public function delivered_at() : string
    {
        return $this->delivered_at;
    }
    /**
     * Whether the webhook delivery is a redelivery.
     */
    public function redelivery() : bool
    {
        return $this->redelivery;
    }
    /**
     * Time spent delivering.
     */
    public function duration() : int
    {
        return $this->duration;
    }
    /**
     * Describes the response returned after attempting the delivery.
     */
    public function status() : string
    {
        return $this->status;
    }
    /**
     * Status code received when delivery was made.
     */
    public function status_code() : int
    {
        return $this->status_code;
    }
    /**
     * The event that triggered the delivery.
     */
    public function event() : string
    {
        return $this->event;
    }
    /**
     * The type of activity for the event that triggered the delivery.
     */
    public function action()
    {
        return $this->action;
    }
    /**
     * The id of the GitHub App installation associated with this event.
     */
    public function installation_id()
    {
        return $this->installation_id;
    }
    /**
     * The id of the repository associated with this event.
     */
    public function repository_id()
    {
        return $this->repository_id;
    }
}
