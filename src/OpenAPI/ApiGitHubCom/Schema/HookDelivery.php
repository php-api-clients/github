<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class HookDelivery
{
    public const SCHEMA_JSON = '{"title":"Webhook delivery","required":["id","guid","delivered_at","redelivery","duration","status","status_code","event","action","installation_id","repository_id","request","response"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the delivery.","examples":[42]},"guid":{"type":"string","description":"Unique identifier for the event (shared with all deliveries for all webhooks that subscribe to this event).","examples":["58474f00-b361-11eb-836d-0e4f3503ccbe"]},"delivered_at":{"type":"string","description":"Time when the delivery was delivered.","format":"date-time","examples":["2021-05-12T20:33:44Z"]},"redelivery":{"type":"boolean","description":"Whether the delivery is a redelivery.","examples":[false]},"duration":{"type":"number","description":"Time spent delivering.","examples":[0.03]},"status":{"type":"string","description":"Description of the status of the attempted delivery","examples":["failed to connect"]},"status_code":{"type":"integer","description":"Status code received when delivery was made.","examples":[502]},"event":{"type":"string","description":"The event that triggered the delivery.","examples":["issues"]},"action":{"type":["string","null"],"description":"The type of activity for the event that triggered the delivery.","examples":["opened"]},"installation_id":{"type":["integer","null"],"description":"The id of the GitHub App installation associated with this event.","examples":[123]},"repository_id":{"type":["integer","null"],"description":"The id of the repository associated with this event.","examples":[123]},"url":{"type":"string","description":"The URL target of the delivery.","examples":["https:\\/\\/www.example.com"]},"request":{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The request headers sent with the webhook delivery.","additionalProperties":true},"payload":{"type":["object","null"],"description":"The webhook payload.","additionalProperties":true}}},"response":{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The response headers received when the delivery was made.","additionalProperties":true},"payload":{"type":["string","null"],"description":"The response payload received.","additionalProperties":true}}}},"description":"Delivery made by a webhook."}';
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
    private int $duration;
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
     * The URL target of the delivery.
     */
    private ?string $url = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery\Request::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery\Request $request;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery\Response::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery\Response $response;
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
    public function duration() : int
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
    /**
     * The URL target of the delivery.
     */
    public function url() : ?string
    {
        return $this->url;
    }
    public function request() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery\Request
    {
        return $this->request;
    }
    public function response() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery\Response
    {
        return $this->response;
    }
}
