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
    public readonly int $id;
    /**
     * Unique identifier for the event (shared with all deliveries for all webhooks that subscribe to this event).
     */
    public readonly string $guid;
    /**
     * Time when the delivery was delivered.
     */
    public readonly string $delivered_at;
    /**
     * Whether the delivery is a redelivery.
     */
    public readonly bool $redelivery;
    /**
     * Time spent delivering.
     */
    public readonly int $duration;
    /**
     * Description of the status of the attempted delivery
     */
    public readonly string $status;
    /**
     * Status code received when delivery was made.
     */
    public readonly int $status_code;
    /**
     * The event that triggered the delivery.
     */
    public readonly string $event;
    /**
     * The type of activity for the event that triggered the delivery.
     */
    public readonly ?string $action;
    /**
     * The id of the GitHub App installation associated with this event.
     */
    public readonly ?int $installation_id;
    /**
     * The id of the repository associated with this event.
     */
    public readonly ?int $repository_id;
    /**
     * The URL target of the delivery.
     */
    public readonly ?string $url;
    public readonly array $request;
    public readonly array $response;
    public function __construct(int $id, string $guid, string $delivered_at, bool $redelivery, int $duration, string $status, int $status_code, string $event, string $action, int $installation_id, int $repository_id, string $url, array $request, array $response)
    {
        $this->id = $id;
        $this->guid = $guid;
        $this->delivered_at = $delivered_at;
        $this->redelivery = $redelivery;
        $this->duration = $duration;
        $this->status = $status;
        $this->status_code = $status_code;
        $this->event = $event;
        $this->action = $action;
        $this->installation_id = $installation_id;
        $this->repository_id = $repository_id;
        $this->url = $url;
        $this->request = $request;
        $this->response = $response;
    }
}
