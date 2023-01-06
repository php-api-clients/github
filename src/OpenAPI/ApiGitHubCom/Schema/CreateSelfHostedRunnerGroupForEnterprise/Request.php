<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateSelfHostedRunnerGroupForEnterprise;

final class Request
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"Name of the runner group."},"visibility":{"enum":["selected","all"],"type":"string","description":"Visibility of a runner group. You can select all organizations or select individual organization."},"selected_organization_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the organization."},"description":"List of organization IDs that can access the runner group."},"runners":{"type":"array","items":{"type":"integer","description":"Unique identifier of the runner."},"description":"List of runner IDs to add to the runner group."},"allows_public_repositories":{"type":"boolean","description":"Whether the runner group can be used by `public` repositories.","default":false},"restricted_to_workflows":{"type":"boolean","description":"If `true`, the runner group will be restricted to running only the workflows specified in the `selected_workflows` array.","default":false},"selected_workflows":{"type":"array","items":{"type":"string","description":"Name of workflow the runner group should be allowed to run. Note that a ref, tag, or long SHA is required.","examples":["octo-org\\/octo-repo\\/.github\\/workflows\\/deploy.yaml@main"]},"description":"List of workflows the runner group should be allowed to run. This setting will be ignored unless `restricted_to_workflows` is set to `true`."}}}';
    public const SCHEMA_TITLE = 'CreateSelfHostedRunnerGroupForEnterprise\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Name of the runner group.
     */
    private string $name;
    /**
     * Visibility of a runner group. You can select all organizations or select individual organization.
     */
    private ?string $visibility = null;
    /**
     * List of organization IDs that can access the runner group.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\SelectedOrganizationIds>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\SelectedOrganizationIds::class)
     */
    private array $selected_organization_ids = array();
    /**
     * List of runner IDs to add to the runner group.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Runners>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Runners::class)
     */
    private array $runners = array();
    /**
     * Whether the runner group can be used by `public` repositories.
     */
    private ?bool $allows_public_repositories = null;
    /**
     * If `true`, the runner group will be restricted to running only the workflows specified in the `selected_workflows` array.
     */
    private ?bool $restricted_to_workflows = null;
    /**
     * List of workflows the runner group should be allowed to run. This setting will be ignored unless `restricted_to_workflows` is set to `true`.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\SelectedWorkflows>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\SelectedWorkflows::class)
     */
    private array $selected_workflows = array();
    /**
     * Name of the runner group.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Visibility of a runner group. You can select all organizations or select individual organization.
     */
    public function visibility() : ?string
    {
        return $this->visibility;
    }
    /**
     * List of organization IDs that can access the runner group.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\SelectedOrganizationIds>
     */
    public function selected_organization_ids() : array
    {
        return $this->selected_organization_ids;
    }
    /**
     * List of runner IDs to add to the runner group.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Runners>
     */
    public function runners() : array
    {
        return $this->runners;
    }
    /**
     * Whether the runner group can be used by `public` repositories.
     */
    public function allows_public_repositories() : ?bool
    {
        return $this->allows_public_repositories;
    }
    /**
     * If `true`, the runner group will be restricted to running only the workflows specified in the `selected_workflows` array.
     */
    public function restricted_to_workflows() : ?bool
    {
        return $this->restricted_to_workflows;
    }
    /**
     * List of workflows the runner group should be allowed to run. This setting will be ignored unless `restricted_to_workflows` is set to `true`.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\SelectedWorkflows>
     */
    public function selected_workflows() : array
    {
        return $this->selected_workflows;
    }
}
