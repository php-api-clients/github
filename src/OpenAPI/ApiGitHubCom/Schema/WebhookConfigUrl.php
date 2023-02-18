<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class WebhookConfigUrl
{
    public const SCHEMA_JSON        = '{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The URL to which the payloads will be delivered.';

    public function __construct()
    {
    }
}
