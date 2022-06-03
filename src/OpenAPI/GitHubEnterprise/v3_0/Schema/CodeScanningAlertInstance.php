<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class CodeScanningAlertInstance
{
    public const SCHEMA_TITLE = 'code-scanning-alert-instance';
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
     * Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code.
     */
    private string $category;
    /**
     * State of a code scanning alert.
     */
    private string $state;
    private string $commit_sha;
    private array $message = array();
    /**
     * Describe a region within a file for the alert.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\CodeScanningAlertLocation::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\CodeScanningAlertLocation $location;
    private string $html_url;
    /**
    * Classifications that have been applied to the file that triggered the alert.
    For example identifying it as documentation, or a generated file.
    * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\CodeScanningAlertClassification>
    * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\CodeScanningAlertClassification::class)
    */
    private array $classifications = array();
    /**
    * The full Git reference, formatted as `refs/heads/<branch name>`,
    `refs/pull/<number>/merge`, or `refs/pull/<number>/head`.
    */
    public function ref() : string
    {
        return $this->ref;
    }
    /**
     * Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
     */
    public function analysis_key() : string
    {
        return $this->analysis_key;
    }
    /**
     * Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.
     */
    public function environment() : string
    {
        return $this->environment;
    }
    /**
     * Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code.
     */
    public function category() : string
    {
        return $this->category;
    }
    /**
     * State of a code scanning alert.
     */
    public function state() : string
    {
        return $this->state;
    }
    public function commit_sha() : string
    {
        return $this->commit_sha;
    }
    public function message() : array
    {
        return $this->message;
    }
    /**
     * Describe a region within a file for the alert.
     */
    public function location() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\CodeScanningAlertLocation
    {
        return $this->location;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
    * Classifications that have been applied to the file that triggered the alert.
    For example identifying it as documentation, or a generated file.
    * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\CodeScanningAlertClassification>
    */
    public function classifications() : array
    {
        return $this->classifications;
    }
}
