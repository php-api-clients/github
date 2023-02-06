<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetSelectedRepositoriesEnabledGithubActionsOrganization\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"List of repository IDs to enable for GitHub Actions."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'SetSelectedRepositoriesEnabledGithubActionsOrganization\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * List of repository IDs to enable for GitHub Actions.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\SelectedRepositoryIds>
     */
    public readonly array $selected_repository_ids;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\SelectedRepositoryIds> $selected_repository_ids
     */
    public function __construct(array $selected_repository_ids)
    {
        $this->selected_repository_ids = $selected_repository_ids;
    }
}
