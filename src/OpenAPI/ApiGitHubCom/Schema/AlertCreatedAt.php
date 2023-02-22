<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class AlertCreatedAt
{
    public const SCHEMA_JSON = '{"type":"string","description":"The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.';
    public function __construct()
    {
    }
}
