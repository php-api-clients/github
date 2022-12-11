<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAnalysisTool
{
    public const SCHEMA_TITLE = 'code-scanning-analysis-tool';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the tool used to generate the code scanning analysis.
     */
    private string $name;
    /**
     * The version of the tool used to generate the code scanning analysis.
     */
    private $version;
    /**
     * The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data.
     */
    private $guid;
    /**
     * The name of the tool used to generate the code scanning analysis.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The version of the tool used to generate the code scanning analysis.
     */
    public function version()
    {
        return $this->version;
    }
    /**
     * The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data.
     */
    public function guid()
    {
        return $this->guid;
    }
}
