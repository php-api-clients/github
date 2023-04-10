<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class WebhookCheckRunCreatedFormEncoded
{
    public const SCHEMA_JSON = '{"title":"Check Run Created Event","required":["payload"],"type":"object","properties":{"payload":{"type":"string","description":"A URL-encoded string of the check_run.created JSON payload. The decoded payload is a JSON object."}},"description":"The check_run.created webhook encoded with URL encoding"}';
    public const SCHEMA_TITLE = 'Check Run Created Event';
    public const SCHEMA_DESCRIPTION = 'The check_run.created webhook encoded with URL encoding';
    public const SCHEMA_EXAMPLE_DATA = '{"payload":"generated_payload_null"}';
    /**
     * payload: A URL-encoded string of the check_run.created JSON payload. The decoded payload is a JSON object.
     */
    public function __construct(public string $payload)
    {
    }
}
