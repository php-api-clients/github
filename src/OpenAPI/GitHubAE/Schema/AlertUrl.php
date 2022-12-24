<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class AlertUrl
{
    public const SCHEMA_JSON = '{"type":"string","description":"The REST API URL of the alert resource.","format":"uri","readOnly":true}';
    public const SCHEMA_TITLE = 'alert-url';
    public const SCHEMA_DESCRIPTION = 'The REST API URL of the alert resource.';
}