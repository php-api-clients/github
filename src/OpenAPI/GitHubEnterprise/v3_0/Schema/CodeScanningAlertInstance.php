<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class CodeScanningAlertInstance
{
    public const SCHEMA_TITLE = 'code-scanning-alert-instance';
    public const SPL_HASH = '000000001f1e26d2000000004be6709d';
    public const SCHEMA_DESCRIPTION = '';
    /**
    * The full Git reference, formatted as `refs/heads/<branch name>`,
    `refs/pull/<number>/merge`, or `refs/pull/<number>/head`.
    */
    private string $ref;
    /**
     * Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
     */
    private string $analysis_key;
    /**
     * Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.
     */
    private string $environment;
    /**
     * State of a code scanning alert.
     */
    private string $state;
    private string $commit_sha;
    private object $message;
    /**
     * Describe a region within a file for the alert.
     */
    private object $location;
    private string $html_url;
    /**
    * Classifications that have been applied to the file that triggered the alert.
    For example identifying it as documentation, or a generated file.
    * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\CodeScanningAlertClassification>
    */
    private array $classifications;
    public function ref() : string
    {
        return $this->ref;
    }
    public function analysis_key() : string
    {
        return $this->analysis_key;
    }
    public function environment() : string
    {
        return $this->environment;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function commit_sha() : string
    {
        return $this->commit_sha;
    }
    public function message() : object
    {
        return $this->message;
    }
    public function location() : object
    {
        return $this->location;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function classifications() : array
    {
        return $this->classifications;
    }
}
