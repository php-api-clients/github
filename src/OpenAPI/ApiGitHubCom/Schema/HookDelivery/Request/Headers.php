<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery\Request;

final readonly class Headers
{
    public const SCHEMA_JSON        = '{"type":["object","null"],"description":"The request headers sent with the webhook delivery.","additionalProperties":true}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The request headers sent with the webhook delivery.';

    public function __construct()
    {
    }
}
