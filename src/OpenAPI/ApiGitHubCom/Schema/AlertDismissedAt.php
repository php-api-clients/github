<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class AlertDismissedAt
{
    public const SCHEMA_JSON = '{"type":["string","null"],"description":"The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'alert-dismissed-at';
    public const SCHEMA_DESCRIPTION = 'The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.';
    public function __construct()
    {
    }
}
