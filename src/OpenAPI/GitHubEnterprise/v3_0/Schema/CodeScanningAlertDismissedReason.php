<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class CodeScanningAlertDismissedReason
{
    public const SCHEMA_TITLE = 'code-scanning-alert-dismissed-reason';
    public const SPL_HASH = '000000005f182d9d00000000682da57f';
    public const SCHEMA_DESCRIPTION = '**Required when the state is dismissed.** The reason for dismissing or closing the alert. Can be one of: `false positive`, `won\'t fix`, and `used in tests`.';
}
