<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\CreateDispatchEvent\Request\ApplicationJson;

final readonly class ClientPayload
{
    public const SCHEMA_JSON         = '{"maxProperties":10,"type":"object","description":"JSON payload with extra information about the webhook event that your action or workflow may use. The maximum number of top-level properties is 10.","additionalProperties":true}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'JSON payload with extra information about the webhook event that your action or workflow may use. The maximum number of top-level properties is 10.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
