<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAlertClassification
{
    public const SCHEMA_JSON = '{"enum":["source","generated","test","library",null],"type":["string","null"],"description":"A classification of the file. For example to identify it as generated."}';
    public const SCHEMA_TITLE = 'code-scanning-alert-classification';
    public const SCHEMA_DESCRIPTION = 'A classification of the file. For example to identify it as generated.';
}
