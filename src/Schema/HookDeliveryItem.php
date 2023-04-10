<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class HookDeliveryItem
{
    public const SCHEMA_JSON = '{"title":"Simple webhook delivery","required":["id","guid","delivered_at","redelivery","duration","status","status_code","event","action","installation_id","repository_id"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the webhook delivery.","examples":[42]},"guid":{"type":"string","description":"Unique identifier for the event (shared with all deliveries for all webhooks that subscribe to this event).","examples":["58474f00-b361-11eb-836d-0e4f3503ccbe"]},"delivered_at":{"type":"string","description":"Time when the webhook delivery occurred.","format":"date-time","examples":["2021-05-12T20:33:44Z"]},"redelivery":{"type":"boolean","description":"Whether the webhook delivery is a redelivery.","examples":[false]},"duration":{"type":"number","description":"Time spent delivering.","examples":[0.03]},"status":{"type":"string","description":"Describes the response returned after attempting the delivery.","examples":["failed to connect"]},"status_code":{"type":"integer","description":"Status code received when delivery was made.","examples":[502]},"event":{"type":"string","description":"The event that triggered the delivery.","examples":["issues"]},"action":{"type":["string","null"],"description":"The type of activity for the event that triggered the delivery.","examples":["opened"]},"installation_id":{"type":["integer","null"],"description":"The id of the GitHub App installation associated with this event.","examples":[123]},"repository_id":{"type":["integer","null"],"description":"The id of the repository associated with this event.","examples":[123]}},"description":"Delivery made by a webhook, without request and response information."}';
    public const SCHEMA_TITLE = 'Simple webhook delivery';
    public const SCHEMA_DESCRIPTION = 'Delivery made by a webhook, without request and response information.';
    public const SCHEMA_EXAMPLE_DATA = '{"id":42,"guid":"58474f00-b361-11eb-836d-0e4f3503ccbe","delivered_at":"2021-05-12T20:33:44Z","redelivery":false,"duration":0.03,"status":"failed to connect","status_code":502,"event":"issues","action":"opened","installation_id":123,"repository_id":123}';
    /**
     * id: Unique identifier of the webhook delivery.
     * guid: Unique identifier for the event (shared with all deliveries for all webhooks that subscribe to this event).
     * deliveredAt: Time when the webhook delivery occurred.
     * redelivery: Whether the webhook delivery is a redelivery.
     * duration: Time spent delivering.
     * status: Describes the response returned after attempting the delivery.
     * statusCode: Status code received when delivery was made.
     * event: The event that triggered the delivery.
     * action: The type of activity for the event that triggered the delivery.
     * installationId: The id of the GitHub App installation associated with this event.
     * repositoryId: The id of the repository associated with this event.
     */
    public function __construct(public int $id, public string $guid, #[\EventSauce\ObjectHydrator\MapFrom('delivered_at')] public string $deliveredAt, public bool $redelivery, public float $duration, public string $status, #[\EventSauce\ObjectHydrator\MapFrom('status_code')] public int $statusCode, public string $event, public ?string $action, #[\EventSauce\ObjectHydrator\MapFrom('installation_id')] public ?int $installationId, #[\EventSauce\ObjectHydrator\MapFrom('repository_id')] public ?int $repositoryId)
    {
    }
}
