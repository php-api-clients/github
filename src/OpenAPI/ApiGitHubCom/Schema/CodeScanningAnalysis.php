<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAnalysis
{
    public const SCHEMA_JSON = '{"required":["ref","commit_sha","analysis_key","environment","error","created_at","results_count","rules_count","id","url","sarif_id","tool","deletable","warning"],"type":"object","properties":{"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`,\\n`refs\\/pull\\/<number>\\/merge`, or `refs\\/pull\\/<number>\\/head`."},"commit_sha":{"maxLength":40,"minLength":40,"pattern":"^[0-9a-fA-F]+$","type":"string","description":"The SHA of the commit to which the analysis you are uploading relates."},"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which this analysis was performed."},"category":{"type":"string","description":"Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code."},"error":{"type":"string","examples":["error reading field xyz"]},"created_at":{"type":"string","description":"The time that the analysis was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"results_count":{"type":"integer","description":"The total number of results in the analysis."},"rules_count":{"type":"integer","description":"The total number of rules used in the analysis."},"id":{"type":"integer","description":"Unique identifier for this analysis."},"url":{"type":"string","description":"The REST API URL of the analysis resource.","format":"uri","readOnly":true},"sarif_id":{"type":"string","description":"An identifier for the upload.","examples":["6c81cd8e-b078-4ac3-a3be-1dad7dbd0b53"]},"tool":{"type":"object","properties":{"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis."},"version":{"type":["string","null"],"description":"The version of the tool used to generate the code scanning analysis."},"guid":{"type":["string","null"],"description":"The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data."}}},"deletable":{"type":"boolean"},"warning":{"type":"string","description":"Warning generated when processing the analysis","examples":["123 results were ignored"]}}}';
    public const SCHEMA_TITLE = 'code-scanning-analysis';
    public const SCHEMA_DESCRIPTION = '';
    /**
    * The full Git reference, formatted as `refs/heads/<branch name>`,
    `refs/pull/<number>/merge`, or `refs/pull/<number>/head`.
    */
    public readonly string $ref;
    /**
     * The SHA of the commit to which the analysis you are uploading relates.
     */
    public readonly string $commit_sha;
    /**
     * Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
     */
    public readonly string $analysis_key;
    /**
     * Identifies the variable values associated with the environment in which this analysis was performed.
     */
    public readonly string $environment;
    /**
     * Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code.
     */
    public readonly ?string $category;
    public readonly string $error;
    /**
     * The time that the analysis was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public readonly string $created_at;
    /**
     * The total number of results in the analysis.
     */
    public readonly int $results_count;
    /**
     * The total number of rules used in the analysis.
     */
    public readonly int $rules_count;
    /**
     * Unique identifier for this analysis.
     */
    public readonly int $id;
    /**
     * The REST API URL of the analysis resource.
     */
    public readonly string $url;
    /**
     * An identifier for the upload.
     */
    public readonly string $sarif_id;
    public readonly array $tool;
    public readonly bool $deletable;
    /**
     * Warning generated when processing the analysis
     */
    public readonly string $warning;
    public function __construct(string $ref, string $commit_sha, string $analysis_key, string $environment, string $category, string $error, string $created_at, int $results_count, int $rules_count, int $id, string $url, string $sarif_id, array $tool, bool $deletable, string $warning)
    {
        $this->ref = $ref;
        $this->commit_sha = $commit_sha;
        $this->analysis_key = $analysis_key;
        $this->environment = $environment;
        $this->category = $category;
        $this->error = $error;
        $this->created_at = $created_at;
        $this->results_count = $results_count;
        $this->rules_count = $rules_count;
        $this->id = $id;
        $this->url = $url;
        $this->sarif_id = $sarif_id;
        $this->tool = $tool;
        $this->deletable = $deletable;
        $this->warning = $warning;
    }
}
