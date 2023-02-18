<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery\Request;

final readonly class Payload
{
    public const SCHEMA_JSON        = '{"type":["object","null"],"description":"The webhook payload.","additionalProperties":true}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The webhook payload.';

    public function __construct()
    {
    }
}
