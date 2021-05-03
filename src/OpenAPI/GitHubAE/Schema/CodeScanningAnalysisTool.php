<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CodeScanningAnalysisTool
{
    public const SCHEMA_TITLE = 'code-scanning-analysis-tool';
    public const SPL_HASH = '000000001f77fc96000000002b0b9da2';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the tool used to generate the code scanning analysis.
     */
    private ?string $name = null;
    /**
     * The version of the tool used to generate the code scanning analysis.
     */
    private ?string $version = null;
    /**
     * The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data.
     */
    private ?string $guid = null;
    public function name() : ?string
    {
        return $this->name;
    }
    public function version() : ?string
    {
        return $this->version;
    }
    public function guid() : ?string
    {
        return $this->guid;
    }
}
