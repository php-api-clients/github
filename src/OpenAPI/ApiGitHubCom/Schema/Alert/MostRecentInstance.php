<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Alert;

final class MostRecentInstance
{
    public const SCHEMA_JSON = '{"title":"Alert Instance","required":["ref","analysis_key","environment","state"],"type":["object","null"],"properties":{"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"classifications":{"type":"array","items":{"type":"string"}},"commit_sha":{"type":"string"},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."},"location":{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}},"message":{"type":"object","properties":{"text":{"type":"string"}}},"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`."},"state":{"enum":["open","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."}}}';
    public const SCHEMA_TITLE = 'Alert Instance';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
     */
    private string $analysis_key;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MostRecentInstance\Classifications>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MostRecentInstance\Classifications::class)
     */
    private array $classifications = array();
    private ?string $commit_sha = null;
    /**
     * Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.
     */
    private string $environment;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MostRecentInstance\Location::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MostRecentInstance\Location $location = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MostRecentInstance\Message::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MostRecentInstance\Message $message = null;
    /**
     * The full Git reference, formatted as `refs/heads/<branch name>`.
     */
    private string $ref;
    /**
     * State of a code scanning alert.
     */
    private string $state;
    /**
     * Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
     */
    public function analysis_key() : string
    {
        return $this->analysis_key;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MostRecentInstance\Classifications>
     */
    public function classifications() : array
    {
        return $this->classifications;
    }
    public function commit_sha() : ?string
    {
        return $this->commit_sha;
    }
    /**
     * Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.
     */
    public function environment() : string
    {
        return $this->environment;
    }
    public function location() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MostRecentInstance\Location
    {
        return $this->location;
    }
    public function message() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MostRecentInstance\Message
    {
        return $this->message;
    }
    /**
     * The full Git reference, formatted as `refs/heads/<branch name>`.
     */
    public function ref() : string
    {
        return $this->ref;
    }
    /**
     * State of a code scanning alert.
     */
    public function state() : string
    {
        return $this->state;
    }
}
