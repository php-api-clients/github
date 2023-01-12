<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetSelectedReposToRequiredWorkflow\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"The IDs of the repositories for which the workflow should be required."}}}';
    public const SCHEMA_TITLE = 'SetSelectedReposToRequiredWorkflow\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The IDs of the repositories for which the workflow should be required.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\SelectedRepositoryIds>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\SelectedRepositoryIds::class)
     */
    private array $selected_repository_ids = array();
    /**
     * The IDs of the repositories for which the workflow should be required.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\SelectedRepositoryIds>
     */
    public function selected_repository_ids() : array
    {
        return $this->selected_repository_ids;
    }
}
