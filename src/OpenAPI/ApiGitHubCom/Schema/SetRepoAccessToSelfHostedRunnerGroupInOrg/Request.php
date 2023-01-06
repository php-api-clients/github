<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetRepoAccessToSelfHostedRunnerGroupInOrg;

final class Request
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"List of repository IDs that can access the runner group."}}}';
    public const SCHEMA_TITLE = 'SetRepoAccessToSelfHostedRunnerGroupInOrg\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * List of repository IDs that can access the runner group.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\SelectedRepositoryIds>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\SelectedRepositoryIds::class)
     */
    private array $selected_repository_ids = array();
    /**
     * List of repository IDs that can access the runner group.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\SelectedRepositoryIds>
     */
    public function selected_repository_ids() : array
    {
        return $this->selected_repository_ids;
    }
}
