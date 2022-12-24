<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class CodeScanningAlertSetState
{
    public const SCHEMA_JSON = '{"enum":["open","dismissed"],"type":"string","description":"Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`."}';
    public const SCHEMA_TITLE = 'code-scanning-alert-set-state';
    public const SCHEMA_DESCRIPTION = 'Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`.';
}