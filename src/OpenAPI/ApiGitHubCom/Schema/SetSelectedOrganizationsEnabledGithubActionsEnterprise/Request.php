<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetSelectedOrganizationsEnabledGithubActionsEnterprise;

final class Request
{
    public const SCHEMA_JSON = '{"required":["selected_organization_ids"],"type":"object","properties":{"selected_organization_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the organization."},"description":"List of organization IDs to enable for GitHub Actions."}}}';
    public const SCHEMA_TITLE = 'SetSelectedOrganizationsEnabledGithubActionsEnterprise\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * List of organization IDs to enable for GitHub Actions.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\SelectedOrganizationIds>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\SelectedOrganizationIds::class)
     */
    private array $selected_organization_ids = array();
    /**
     * List of organization IDs to enable for GitHub Actions.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\SelectedOrganizationIds>
     */
    public function selected_organization_ids() : array
    {
        return $this->selected_organization_ids;
    }
}
