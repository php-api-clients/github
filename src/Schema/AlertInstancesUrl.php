<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class AlertInstancesUrl
{
    public const SCHEMA_JSON         = '{"type":"string","description":"The REST API URL for fetching the list of instances for an alert.","format":"uri","readOnly":true}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The REST API URL for fetching the list of instances for an alert.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
