<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C6Dd4D3583Eac7Aeb24C8Fd55B2A155Fc
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"Name of the runner group."},"visibility":{"enum":["selected","all","private"],"type":"string","description":"Visibility of a runner group. You can select all repositories, select individual repositories, or limit access to private repositories.","default":"all"},"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"List of repository IDs that can access the runner group."},"runners":{"type":"array","items":{"type":"integer","description":"Unique identifier of the runner."},"description":"List of runner IDs to add to the runner group."},"allows_public_repositories":{"type":"boolean","description":"Whether the runner group can be used by `public` repositories.","default":false},"restricted_to_workflows":{"type":"boolean","description":"If `true`, the runner group will be restricted to running only the workflows specified in the `selected_workflows` array.","default":false},"selected_workflows":{"type":"array","items":{"type":"string","description":"Name of workflow the runner group should be allowed to run. Note that a ref, tag, or long SHA is required.","examples":["octo-org\\/octo-repo\\/.github\\/workflows\\/deploy.yaml@main"]},"description":"List of workflows the runner group should be allowed to run. This setting will be ignored unless `restricted_to_workflows` is set to `true`."}}}';
    public const SCHEMA_TITLE = 'c_6dd4d3583eac7aeb24c8fd55b2a155fc';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Name of the runner group.
     */
    private string $name;
    /**
     * Visibility of a runner group. You can select all repositories, select individual repositories, or limit access to private repositories.
     */
    private ?string $visibility = null;
    /**
     * List of repository IDs that can access the runner group.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C6Dd4D3583Eac7Aeb24C8Fd55B2A155Fc\SelectedRepositoryIds>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C6Dd4D3583Eac7Aeb24C8Fd55B2A155Fc\SelectedRepositoryIds::class)
     */
    private array $selected_repository_ids = array();
    /**
     * List of runner IDs to add to the runner group.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C6Dd4D3583Eac7Aeb24C8Fd55B2A155Fc\Runners>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C6Dd4D3583Eac7Aeb24C8Fd55B2A155Fc\Runners::class)
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
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C6Dd4D3583Eac7Aeb24C8Fd55B2A155Fc\SelectedWorkflows>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C6Dd4D3583Eac7Aeb24C8Fd55B2A155Fc\SelectedWorkflows::class)
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
     * Visibility of a runner group. You can select all repositories, select individual repositories, or limit access to private repositories.
     */
    public function visibility() : ?string
    {
        return $this->visibility;
    }
    /**
     * List of repository IDs that can access the runner group.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C6Dd4D3583Eac7Aeb24C8Fd55B2A155Fc\SelectedRepositoryIds>
     */
    public function selected_repository_ids() : array
    {
        return $this->selected_repository_ids;
    }
    /**
     * List of runner IDs to add to the runner group.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C6Dd4D3583Eac7Aeb24C8Fd55B2A155Fc\Runners>
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
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C6Dd4D3583Eac7Aeb24C8Fd55B2A155Fc\SelectedWorkflows>
     */
    public function selected_workflows() : array
    {
        return $this->selected_workflows;
    }
}
