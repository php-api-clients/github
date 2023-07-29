<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class SecretScanningAlertResolutionWebhook
{
    public const SCHEMA_JSON         = '{"enum":["false_positive","wont_fix","revoked","used_in_tests","pattern_deleted","pattern_edited",null],"type":["string","null"],"description":"The reason for resolving the alert."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The reason for resolving the alert.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
