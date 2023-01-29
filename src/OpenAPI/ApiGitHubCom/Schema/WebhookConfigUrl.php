<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WebhookConfigUrl
{
    public const SCHEMA_JSON = '{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]}';
    public const SCHEMA_TITLE = 'webhook-config-url';
    public const SCHEMA_DESCRIPTION = 'The URL to which the payloads will be delivered.';
    public function __construct()
    {
    }
}
