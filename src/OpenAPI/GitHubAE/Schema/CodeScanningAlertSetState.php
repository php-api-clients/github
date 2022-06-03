<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CodeScanningAlertSetState
{
    public const SCHEMA_TITLE = 'code-scanning-alert-set-state';
    public const SCHEMA_DESCRIPTION = 'Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`.';
}
