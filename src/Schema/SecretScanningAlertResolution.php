<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class SecretScanningAlertResolution
{
    public const SCHEMA_JSON = '{"enum":[null,"false_positive","wont_fix","revoked","used_in_tests"],"type":["string","null"],"description":"**Required when the `state` is `resolved`.** The reason for resolving the alert."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '**Required when the `state` is `resolved`.** The reason for resolving the alert.';
    public function __construct()
    {
    }
}
