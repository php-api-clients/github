<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CodeScanningAlertInstance
{
    public const SCHEMA_TITLE       = 'code-scanning-alert-instance';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The full Git reference, formatted as `refs/heads/<branch name>`,
    `refs/pull/<number>/merge`, or `refs/pull/<number>/head`.
     */
    private ?string $ref = null;
    /**
     * Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
     */
    private ?string $analysis_key = null;
    /**
     * Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.
     */
    private ?string $environment = null;
    /**
     * State of a code scanning alert.
     */
    private ?string $state      = null;
    private ?string $commit_sha = null;
    private array $message      = [];
    /**
     * Describe a region within a file for the alert.
     */
    private array $location   = [];
    private ?string $html_url = null;
    /**
     * Classifications that have been applied to the file that triggered the alert.
    For example identifying it as documentation, or a generated file.
     *
     * @var array<CodeScanningAlertClassification>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CodeScanningAlertClassification::class)
     */
    private array $classifications = [];

    public function ref(): ?string
    {
        return $this->ref;
    }

    public function analysis_key(): ?string
    {
        return $this->analysis_key;
    }

    public function environment(): ?string
    {
        return $this->environment;
    }

    public function state(): ?string
    {
        return $this->state;
    }

    public function commit_sha(): ?string
    {
        return $this->commit_sha;
    }

    public function message(): array
    {
        return $this->message;
    }

    public function location(): array
    {
        return $this->location;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function classifications(): array
    {
        return $this->classifications;
    }
}
