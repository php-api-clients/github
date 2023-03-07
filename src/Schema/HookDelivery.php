<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class HookDelivery
{
    public const SCHEMA_JSON = '{"title":"Webhook delivery","required":["id","guid","delivered_at","redelivery","duration","status","status_code","event","action","installation_id","repository_id","request","response"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the delivery.","examples":[42]},"guid":{"type":"string","description":"Unique identifier for the event (shared with all deliveries for all webhooks that subscribe to this event).","examples":["58474f00-b361-11eb-836d-0e4f3503ccbe"]},"delivered_at":{"type":"string","description":"Time when the delivery was delivered.","format":"date-time","examples":["2021-05-12T20:33:44Z"]},"redelivery":{"type":"boolean","description":"Whether the delivery is a redelivery.","examples":[false]},"duration":{"type":"number","description":"Time spent delivering.","examples":[0.03]},"status":{"type":"string","description":"Description of the status of the attempted delivery","examples":["failed to connect"]},"status_code":{"type":"integer","description":"Status code received when delivery was made.","examples":[502]},"event":{"type":"string","description":"The event that triggered the delivery.","examples":["issues"]},"action":{"type":["string","null"],"description":"The type of activity for the event that triggered the delivery.","examples":["opened"]},"installation_id":{"type":["integer","null"],"description":"The id of the GitHub App installation associated with this event.","examples":[123]},"repository_id":{"type":["integer","null"],"description":"The id of the repository associated with this event.","examples":[123]},"url":{"type":"string","description":"The URL target of the delivery.","examples":["https:\\/\\/www.example.com"]},"request":{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The request headers sent with the webhook delivery.","additionalProperties":true},"payload":{"type":["object","null"],"description":"The webhook payload.","additionalProperties":true}}},"response":{"required":["headers","payload"],"type":"object","properties":{"headers":{"type":["object","null"],"description":"The response headers received when the delivery was made.","additionalProperties":true},"payload":{"type":["string","null"],"description":"The response payload received.","additionalProperties":true}}}},"description":"Delivery made by a webhook."}';
    public const SCHEMA_TITLE = 'Webhook delivery';
    public const SCHEMA_DESCRIPTION = 'Delivery made by a webhook.';
    public const SCHEMA_EXAMPLE_DATA = '{"id":42,"guid":"58474f00-b361-11eb-836d-0e4f3503ccbe","delivered_at":"2021-05-12T20:33:44Z","redelivery":false,"duration":0.03,"status":"failed to connect","status_code":502,"event":"issues","action":"opened","installation_id":123,"repository_id":123,"url":"https:\\/\\/www.example.com","request":{"headers":null,"payload":null},"response":{"headers":null,"payload":"generated_payload"}}';
    /**
     * id: Unique identifier of the delivery.
     * guid: Unique identifier for the event (shared with all deliveries for all webhooks that subscribe to this event).
     * delivered_at: Time when the delivery was delivered.
     * redelivery: Whether the delivery is a redelivery.
     * duration: Time spent delivering.
     * status: Description of the status of the attempted delivery
     * status_code: Status code received when delivery was made.
     * event: The event that triggered the delivery.
     * action: The type of activity for the event that triggered the delivery.
     * installation_id: The id of the GitHub App installation associated with this event.
     * repository_id: The id of the repository associated with this event.
     * url: The URL target of the delivery.
     */
    public function __construct(public ?int $id, public ?string $guid, public ?string $delivered_at, public ?bool $redelivery, public ?int $duration, public ?string $status, public ?int $status_code, public ?string $event, public ?string $action, public ?int $installation_id, public ?int $repository_id, public string $url, public ?Schema\HookDelivery\Request $request, public ?Schema\HookDelivery\Response $response)
    {
    }
}
