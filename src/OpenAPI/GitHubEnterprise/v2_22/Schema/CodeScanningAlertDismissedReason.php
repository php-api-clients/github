<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class CodeScanningAlertDismissedReason
{
    public const SCHEMA_TITLE = 'code-scanning-alert-dismissed-reason';
    public const SPL_HASH = '000000003d2c30100000000068da5fbb';
    public const SCHEMA_DESCRIPTION = '**Required when the state is dismissed.** The reason for dismissing or closing the alert. Can be one of: `false positive`, `won\'t fix`, and `used in tests`.';
}
