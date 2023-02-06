<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAlertSeverity
{
    public const SCHEMA_JSON = '{"enum":["critical","high","medium","low","warning","note","error"],"type":"string","description":"Severity of a code scanning alert."}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'code-scanning-alert-severity';
    public const SCHEMA_DESCRIPTION = 'Severity of a code scanning alert.';
    public function __construct()
    {
    }
}
