<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CodeScanningAlertSetState
{
    public const SCHEMA_TITLE = 'code-scanning-alert-set-state';
    public const SPL_HASH = '000000001d5ba8dd00000000544e0d87';
    public const SCHEMA_DESCRIPTION = 'Sets the state of the code scanning alert. Can be one of `open` or `dismissed`. You must provide `dismissed_reason` when you set the state to `dismissed`.';
}
