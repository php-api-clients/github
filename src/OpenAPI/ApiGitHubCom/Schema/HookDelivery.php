<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class HookDelivery
{
    public const SCHEMA_TITLE = 'Webhook delivery';
    public const SCHEMA_DESCRIPTION = 'Delivery made by a webhook.';
    /**
     * Unique identifier of the delivery.
     */
    private int $id;
    /**
     * Unique identifier for the event (shared with all deliveries for all webhooks that subscribe to this event).
     */
    private string $guid;
    /**
     * Time when the delivery was delivered.
     */
    private string $delivered_at;
    /**
     * Whether the delivery is a redelivery.
     */
    private bool $redelivery;
    /**
     * Time spent delivering.
     */
    private number $duration;
    /**
     * Description of the status of the attempted delivery
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
    private ?string $action = null;
    /**
     * The id of the GitHub App installation associated with this event.
     */
    private ?int $installation_id = null;
    /**
     * The id of the repository associated with this event.
     */
    private ?int $repository_id = null;
    /**
     * The URL target of the delivery.
     */
    private ?string $url = null;
    private array $request = array();
    private array $response = array();
    /**
     * Unique identifier of the delivery.
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
     * Time when the delivery was delivered.
     */
    public function delivered_at() : string
    {
        return $this->delivered_at;
    }
    /**
     * Whether the delivery is a redelivery.
     */
    public function redelivery() : bool
    {
        return $this->redelivery;
    }
    /**
     * Time spent delivering.
     */
    public function duration() : number
    {
        return $this->duration;
    }
    /**
     * Description of the status of the attempted delivery
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
    public function action() : ?string
    {
        return $this->action;
    }
    /**
     * The id of the GitHub App installation associated with this event.
     */
    public function installation_id() : ?int
    {
        return $this->installation_id;
    }
    /**
     * The id of the repository associated with this event.
     */
    public function repository_id() : ?int
    {
        return $this->repository_id;
    }
    /**
     * The URL target of the delivery.
     */
    public function url() : ?string
    {
        return $this->url;
    }
    public function request() : array
    {
        return $this->request;
    }
    public function response() : array
    {
        return $this->response;
    }
}
