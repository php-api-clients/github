<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class CodeScanningAlertDismissedReason
{
    public const SCHEMA_TITLE = 'code-scanning-alert-dismissed-reason';
    public const SPL_HASH = '00000000269f2df400000000005e85e5';
    public const SCHEMA_DESCRIPTION = '**Required when the state is dismissed.** The reason for dismissing or closing the alert. Can be one of: `false positive`, `won\'t fix`, and `used in tests`.';
}
