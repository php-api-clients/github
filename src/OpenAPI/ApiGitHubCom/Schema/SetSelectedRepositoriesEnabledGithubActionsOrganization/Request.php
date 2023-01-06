<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetSelectedRepositoriesEnabledGithubActionsOrganization;

final class Request
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"List of repository IDs to enable for GitHub Actions."}}}';
    public const SCHEMA_TITLE = 'SetSelectedRepositoriesEnabledGithubActionsOrganization\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * List of repository IDs to enable for GitHub Actions.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\SelectedRepositoryIds>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\SelectedRepositoryIds::class)
     */
    private array $selected_repository_ids = array();
    /**
     * List of repository IDs to enable for GitHub Actions.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\SelectedRepositoryIds>
     */
    public function selected_repository_ids() : array
    {
        return $this->selected_repository_ids;
    }
}
