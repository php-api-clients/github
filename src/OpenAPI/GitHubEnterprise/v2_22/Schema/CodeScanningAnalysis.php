<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class CodeScanningAnalysis
{
    public const SCHEMA_TITLE       = 'code-scanning-analysis';
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
    private string $category;
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
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\CodeScanningAnalysisTool::class) */
    private CodeScanningAnalysisTool $tool;
    private bool $deletable;
    /**
     * Warning generated when processing the analysis
     */
    private string $warning;

    /**
     * The full Git reference, formatted as `refs/heads/<branch name>`,
    `refs/pull/<number>/merge`, or `refs/pull/<number>/head`.
     */
    public function ref(): string
    {
        return $this->ref;
    }

    /**
     * The SHA of the commit to which the analysis you are uploading relates.
     */
    public function commit_sha(): string
    {
        return $this->commit_sha;
    }

    /**
     * Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
     */
    public function analysis_key(): string
    {
        return $this->analysis_key;
    }

    /**
     * Identifies the variable values associated with the environment in which this analysis was performed.
     */
    public function environment(): string
    {
        return $this->environment;
    }

    /**
     * Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code.
     */
    public function category(): string
    {
        return $this->category;
    }

    public function error(): string
    {
        return $this->error;
    }

    /**
     * The time that the analysis was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function created_at(): string
    {
        return $this->created_at;
    }

    /**
     * The total number of results in the analysis.
     */
    public function results_count(): int
    {
        return $this->results_count;
    }

    /**
     * The total number of rules used in the analysis.
     */
    public function rules_count(): int
    {
        return $this->rules_count;
    }

    /**
     * Unique identifier for this analysis.
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * The REST API URL of the analysis resource.
     */
    public function url(): string
    {
        return $this->url;
    }

    /**
     * An identifier for the upload.
     */
    public function sarif_id(): string
    {
        return $this->sarif_id;
    }

    public function tool(): CodeScanningAnalysisTool
    {
        return $this->tool;
    }

    public function deletable(): bool
    {
        return $this->deletable;
    }

    /**
     * Warning generated when processing the analysis
     */
    public function warning(): string
    {
        return $this->warning;
    }
}
