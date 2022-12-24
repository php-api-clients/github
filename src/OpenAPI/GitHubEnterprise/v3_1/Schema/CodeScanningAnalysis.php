<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class CodeScanningAnalysis
{
    public const SCHEMA_JSON = '{"required":["ref","commit_sha","analysis_key","environment","error","created_at","results_count","rules_count","id","url","sarif_id","tool","deletable","warning"],"type":"object","properties":{"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`,\\n`refs\\/pull\\/<number>\\/merge`, or `refs\\/pull\\/<number>\\/head`."},"commit_sha":{"maxLength":40,"minLength":40,"pattern":"^[0-9a-fA-F]+$","type":"string","description":"The SHA of the commit to which the analysis you are uploading relates."},"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which this analysis was performed."},"category":{"type":"string","description":"Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code."},"error":{"type":"string","examples":["error reading field xyz"]},"created_at":{"type":"string","description":"The time that the analysis was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"results_count":{"type":"integer","description":"The total number of results in the analysis."},"rules_count":{"type":"integer","description":"The total number of rules used in the analysis."},"id":{"type":"integer","description":"Unique identifier for this analysis."},"url":{"type":"string","description":"The REST API URL of the analysis resource.","format":"uri","readOnly":true},"sarif_id":{"type":"string","description":"An identifier for the upload.","examples":["6c81cd8e-b078-4ac3-a3be-1dad7dbd0b53"]},"tool":{"type":"object","properties":{"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis."},"version":{"type":["string","null"],"description":"The version of the tool used to generate the code scanning analysis."},"guid":{"type":["string","null"],"description":"The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data."}}},"deletable":{"type":"boolean"},"warning":{"type":"string","description":"Warning generated when processing the analysis","examples":["123 results were ignored"]},"tool_name":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'code-scanning-analysis';
    public const SCHEMA_DESCRIPTION = '';
    /**
    * The full Git reference, formatted as `refs/heads/<branch name>`,
    `refs/pull/<number>/merge`, or `refs/pull/<number>/head`.
    */
    private string $ref;
    /**
     * The SHA of the commit to which the analysis you are uploading relates.
     */
    private string $commit_sha;
    /**
     * Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
     */
    private string $analysis_key;
    /**
     * Identifies the variable values associated with the environment in which this analysis was performed.
     */
    private string $environment;
    /**
     * Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code.
     */
    private ?string $category = null;
    private string $error;
    /**
     * The time that the analysis was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private string $created_at;
    /**
     * The total number of results in the analysis.
     */
    private int $results_count;
    /**
     * The total number of rules used in the analysis.
     */
    private int $rules_count;
    /**
     * Unique identifier for this analysis.
     */
    private int $id;
    /**
     * The REST API URL of the analysis resource.
     */
    private string $url;
    /**
     * An identifier for the upload.
     */
    private string $sarif_id;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningAnalysisTool::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningAnalysisTool $tool;
    private bool $deletable;
    /**
     * Warning generated when processing the analysis
     */
    private string $warning;
    private ?string $tool_name = null;
    /**
    * The full Git reference, formatted as `refs/heads/<branch name>`,
    `refs/pull/<number>/merge`, or `refs/pull/<number>/head`.
    */
    public function ref() : string
    {
        return $this->ref;
    }
    /**
     * The SHA of the commit to which the analysis you are uploading relates.
     */
    public function commit_sha() : string
    {
        return $this->commit_sha;
    }
    /**
     * Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
     */
    public function analysis_key() : string
    {
        return $this->analysis_key;
    }
    /**
     * Identifies the variable values associated with the environment in which this analysis was performed.
     */
    public function environment() : string
    {
        return $this->environment;
    }
    /**
     * Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code.
     */
    public function category() : ?string
    {
        return $this->category;
    }
    public function error() : string
    {
        return $this->error;
    }
    /**
     * The time that the analysis was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function created_at() : string
    {
        return $this->created_at;
    }
    /**
     * The total number of results in the analysis.
     */
    public function results_count() : int
    {
        return $this->results_count;
    }
    /**
     * The total number of rules used in the analysis.
     */
    public function rules_count() : int
    {
        return $this->rules_count;
    }
    /**
     * Unique identifier for this analysis.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The REST API URL of the analysis resource.
     */
    public function url() : string
    {
        return $this->url;
    }
    /**
     * An identifier for the upload.
     */
    public function sarif_id() : string
    {
        return $this->sarif_id;
    }
    public function tool() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningAnalysisTool
    {
        return $this->tool;
    }
    public function deletable() : bool
    {
        return $this->deletable;
    }
    /**
     * Warning generated when processing the analysis
     */
    public function warning() : string
    {
        return $this->warning;
    }
    public function tool_name() : ?string
    {
        return $this->tool_name;
    }
}
