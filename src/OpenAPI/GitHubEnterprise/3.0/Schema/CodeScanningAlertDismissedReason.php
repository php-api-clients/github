<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Schema;

final class CodeScanningAlertDismissedReason
{
    public const SCHEMA_TITLE = 'code-scanning-alert-dismissed-reason';
    public const SCHEMA_DESCRIPTION = '**Required when the state is dismissed.** The reason for dismissing or closing the alert. Can be one of: `false positive`, `won\'t fix`, and `used in tests`.';
}
