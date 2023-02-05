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
    public readonly string $analysis_key;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MostRecentInstance\Classifications>
     */
    public readonly array $classifications;
    public readonly ?string $commit_sha;
    /**
     * Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.
     */
    public readonly string $environment;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MostRecentInstance\Location $location;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MostRecentInstance\Message $message;
    /**
     * The full Git reference, formatted as `refs/heads/<branch name>`.
     */
    public readonly string $ref;
    /**
     * State of a code scanning alert.
     */
    public readonly string $state;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MostRecentInstance\Classifications> $classifications
     */
    public function __construct(string $analysis_key, array $classifications, string $commit_sha, string $environment, object $location, object $message, string $ref, string $state)
    {
        $this->analysis_key = $analysis_key;
        $this->classifications = $classifications;
        $this->commit_sha = $commit_sha;
        $this->environment = $environment;
        $this->location = $location;
        $this->message = $message;
        $this->ref = $ref;
        $this->state = $state;
    }
}
