<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewPendingDeploymentsForRun\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["environment_ids","state","comment"],"type":"object","properties":{"environment_ids":{"type":"array","items":{"type":"integer","examples":[161171787]},"description":"The list of environment ids to approve or reject","examples":[161171787,161171795]},"state":{"enum":["approved","rejected"],"type":"string","description":"Whether to approve or reject deployment to the specified environments.","examples":["approved"]},"comment":{"type":"string","description":"A comment to accompany the deployment review","examples":["Ship it!"]}}}';
    public const SCHEMA_TITLE = 'ReviewPendingDeploymentsForRun\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The list of environment ids to approve or reject
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\EnvironmentIds>
     */
    public readonly array $environment_ids;
    /**
     * Whether to approve or reject deployment to the specified environments.
     */
    public readonly string $state;
    /**
     * A comment to accompany the deployment review
     */
    public readonly string $comment;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\EnvironmentIds> $environment_ids
     */
    public function __construct(array $environment_ids, string $state, string $comment)
    {
        $this->environment_ids = $environment_ids;
        $this->state = $state;
        $this->comment = $comment;
    }
}