<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SecretScanningAlertResolution
{
    public const SCHEMA_TITLE = 'secret-scanning-alert-resolution';
    public const SCHEMA_DESCRIPTION = '**Required when the `state` is `resolved`.** The reason for resolving the alert. Can be one of `false_positive`, `wont_fix`, `revoked`, or `used_in_tests`.';
}