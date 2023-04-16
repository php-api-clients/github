<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class SecretScanningAlertResolutionComment
{
    public const SCHEMA_JSON         = '{"type":["string","null"],"description":"An optional comment when closing an alert. Cannot be updated or deleted. Must be `null` when changing `state` to `open`."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'An optional comment when closing an alert. Cannot be updated or deleted. Must be `null` when changing `state` to `open`.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
