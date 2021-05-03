<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAnalysisTool
{
    public const SCHEMA_TITLE = 'code-scanning-analysis-tool';
    public const SPL_HASH = '0000000020701dcd0000000042193899';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the tool used to generate the code scanning analysis.
     */
    private string $name;
    /**
     * The version of the tool used to generate the code scanning analysis.
     */
    private string $version;
    /**
     * The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data.
     */
    private string $guid;
    public function name() : string
    {
        return $this->name;
    }
    public function version() : string
    {
        return $this->version;
    }
    public function guid() : string
    {
        return $this->guid;
    }
}
