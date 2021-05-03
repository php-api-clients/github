<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CodeScanningAlertDismissedReason
{
    public const SCHEMA_TITLE = 'code-scanning-alert-dismissed-reason';
    public const SPL_HASH = '000000007ee6e84e0000000021479ea3';
    public const SCHEMA_DESCRIPTION = '**Required when the state is dismissed.** The reason for dismissing or closing the alert. Can be one of: `false positive`, `won\'t fix`, and `used in tests`.';
}
