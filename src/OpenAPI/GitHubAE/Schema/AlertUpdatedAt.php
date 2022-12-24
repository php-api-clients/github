<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class AlertUpdatedAt
{
    public const SCHEMA_JSON = '{"type":"string","description":"The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true}';
    public const SCHEMA_TITLE = 'alert-updated-at';
    public const SCHEMA_DESCRIPTION = 'The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.';
}