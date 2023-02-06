<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request;

final class Headers
{
    public const SCHEMA_JSON = '{"type":["object","null"],"description":"The request headers sent with the webhook delivery.","additionalProperties":true}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Request\\Headers';
    public const SCHEMA_DESCRIPTION = 'The request headers sent with the webhook delivery.';
    public function __construct()
    {
    }
}
