<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class HookDeliveryItem
{
    public const SCHEMA_JSON        = '{"title":"Simple webhook delivery","required":["id","guid","delivered_at","redelivery","duration","status","status_code","event","action","installation_id","repository_id"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the webhook delivery.","examples":[42]},"guid":{"type":"string","description":"Unique identifier for the event (shared with all deliveries for all webhooks that subscribe to this event).","examples":["58474f00-b361-11eb-836d-0e4f3503ccbe"]},"delivered_at":{"type":"string","description":"Time when the webhook delivery occurred.","format":"date-time","examples":["2021-05-12T20:33:44Z"]},"redelivery":{"type":"boolean","description":"Whether the webhook delivery is a redelivery.","examples":[false]},"duration":{"type":"number","description":"Time spent delivering.","examples":[0.03]},"status":{"type":"string","description":"Describes the response returned after attempting the delivery.","examples":["failed to connect"]},"status_code":{"type":"integer","description":"Status code received when delivery was made.","examples":[502]},"event":{"type":"string","description":"The event that triggered the delivery.","examples":["issues"]},"action":{"type":["string","null"],"description":"The type of activity for the event that triggered the delivery.","examples":["opened"]},"installation_id":{"type":["integer","null"],"description":"The id of the GitHub App installation associated with this event.","examples":[123]},"repository_id":{"type":["integer","null"],"description":"The id of the repository associated with this event.","examples":[123]}},"description":"Delivery made by a webhook, without request and response information."}';
    public const SCHEMA_TITLE       = 'Simple webhook delivery';
    public const SCHEMA_DESCRIPTION = 'Delivery made by a webhook, without request and response information.';
    /**
     * Unique identifier of the webhook delivery.
     */
    public ?int $id;
    /**
     * Unique identifier for the event (shared with all deliveries for all webhooks that subscribe to this event).
     */
    public ?string $guid;
    /**
     * Time when the webhook delivery occurred.
     */
    public ?string $delivered_at;
    /**
     * Whether the webhook delivery is a redelivery.
     */
    public ?bool $redelivery;
    /**
     * Time spent delivering.
     */
    public ?int $duration;
    /**
     * Describes the response returned after attempting the delivery.
     */
    public ?string $status;
    /**
     * Status code received when delivery was made.
     */
    public ?int $status_code;
    /**
     * The event that triggered the delivery.
     */
    public ?string $event;
    /**
     * The type of activity for the event that triggered the delivery.
     */
    public ?string $action;
    /**
     * The id of the GitHub App installation associated with this event.
     */
    public ?int $installation_id;
    /**
     * The id of the repository associated with this event.
     */
    public ?int $repository_id;

    public function __construct(int $id, string $guid, string $delivered_at, bool $redelivery, int $duration, string $status, int $status_code, string $event, string $action, int $installation_id, int $repository_id)
    {
        $this->id              = $id;
        $this->guid            = $guid;
        $this->delivered_at    = $delivered_at;
        $this->redelivery      = $redelivery;
        $this->duration        = $duration;
        $this->status          = $status;
        $this->status_code     = $status_code;
        $this->event           = $event;
        $this->action          = $action;
        $this->installation_id = $installation_id;
        $this->repository_id   = $repository_id;
    }
}
