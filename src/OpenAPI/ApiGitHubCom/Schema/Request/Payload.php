<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request;

final class Payload
{
    public const SCHEMA_JSON = '{"type":["object","null"],"description":"The webhook payload.","additionalProperties":true}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Request\\Payload';
    public const SCHEMA_DESCRIPTION = 'The webhook payload.';
    public function __construct()
    {
    }
}
