<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class CodeScanningAlertSetState
{
    public const SCHEMA_TITLE = 'code-scanning-alert-set-state';
    public const SPL_HASH = '00000000269f227c00000000005e85e5';
    public const SCHEMA_DESCRIPTION = 'Sets the state of the code scanning alert. Can be one of `open` or `dismissed`. You must provide `dismissed_reason` when you set the state to `dismissed`.';
}
