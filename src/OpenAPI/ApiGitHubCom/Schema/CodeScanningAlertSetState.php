<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAlertSetState
{
    public const SCHEMA_TITLE = 'code-scanning-alert-set-state';
    public const SPL_HASH = '00000000252f45a60000000029de5079';
    public const SCHEMA_DESCRIPTION = 'Sets the state of the code scanning alert. Can be one of `open` or `dismissed`. You must provide `dismissed_reason` when you set the state to `dismissed`.';
}
