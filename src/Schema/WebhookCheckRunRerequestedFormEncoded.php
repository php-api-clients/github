<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class WebhookCheckRunRerequestedFormEncoded
{
    public const SCHEMA_JSON = '{"title":"Check Run Re-Requested Event","required":["payload"],"type":"object","properties":{"payload":{"type":"string","description":"A URL-encoded string of the check_run.rerequested JSON payload. The decoded payload is a JSON object."}},"description":"The check_run.rerequested webhook encoded with URL encoding"}';
    public const SCHEMA_TITLE = 'Check Run Re-Requested Event';
    public const SCHEMA_DESCRIPTION = 'The check_run.rerequested webhook encoded with URL encoding';
    public const SCHEMA_EXAMPLE_DATA = '{"payload":"generated_payload"}';
    /**
     * payload: A URL-encoded string of the check_run.rerequested JSON payload. The decoded payload is a JSON object.
     */
    public function __construct(public ?string $payload)
    {
    }
}
