<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class AlertUpdatedAt
{
    public const SCHEMA_JSON         = '{"type":"string","description":"The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
