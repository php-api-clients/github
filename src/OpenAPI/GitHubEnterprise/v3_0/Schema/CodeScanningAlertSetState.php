<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class CodeScanningAlertSetState
{
    public const SCHEMA_TITLE = 'code-scanning-alert-set-state';
    public const SPL_HASH = '0000000065dd6c9d000000006352672d';
    public const SCHEMA_DESCRIPTION = 'Sets the state of the code scanning alert. Can be one of `open` or `dismissed`. You must provide `dismissed_reason` when you set the state to `dismissed`.';
}
