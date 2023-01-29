<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAnalysisEnvironment
{
    public const SCHEMA_JSON = '{"type":"string","description":"Identifies the variable values associated with the environment in which this analysis was performed."}';
    public const SCHEMA_TITLE = 'code-scanning-analysis-environment';
    public const SCHEMA_DESCRIPTION = 'Identifies the variable values associated with the environment in which this analysis was performed.';
    public function __construct()
    {
    }
}
