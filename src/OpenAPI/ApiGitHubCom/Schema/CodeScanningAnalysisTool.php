<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAnalysisTool
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis."},"version":{"type":["string","null"],"description":"The version of the tool used to generate the code scanning analysis."},"guid":{"type":["string","null"],"description":"The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'code-scanning-analysis-tool';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the tool used to generate the code scanning analysis.
     */
    public readonly string $name;
    /**
     * The version of the tool used to generate the code scanning analysis.
     */
    public readonly ?string $version;
    /**
     * The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data.
     */
    public readonly ?string $guid;
    public function __construct(string $name, string $version, string $guid)
    {
        $this->name = $name;
        $this->version = $version;
        $this->guid = $guid;
    }
}
