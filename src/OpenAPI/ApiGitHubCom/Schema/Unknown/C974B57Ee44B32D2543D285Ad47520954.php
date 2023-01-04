<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C974B57Ee44B32D2543D285Ad47520954
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"Name of the runner group."},"visibility":{"enum":["selected","all","private"],"type":"string","description":"Visibility of a runner group. You can select all repositories, select individual repositories, or all private repositories."},"allows_public_repositories":{"type":"boolean","description":"Whether the runner group can be used by `public` repositories.","default":false},"restricted_to_workflows":{"type":"boolean","description":"If `true`, the runner group will be restricted to running only the workflows specified in the `selected_workflows` array.","default":false},"selected_workflows":{"type":"array","items":{"type":"string","description":"Name of workflow the runner group should be allowed to run. Note that a ref, tag, or long SHA is required.","examples":["octo-org\\/octo-repo\\/.github\\/workflows\\/deploy.yaml@main"]},"description":"List of workflows the runner group should be allowed to run. This setting will be ignored unless `restricted_to_workflows` is set to `true`."}}}';
    public const SCHEMA_TITLE = 'c_974b57ee44b32d2543d285ad47520954';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Name of the runner group.
     */
    private string $name;
    /**
     * Visibility of a runner group. You can select all repositories, select individual repositories, or all private repositories.
     */
    private ?string $visibility = null;
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
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C974B57Ee44B32D2543D285Ad47520954\SelectedWorkflows>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C974B57Ee44B32D2543D285Ad47520954\SelectedWorkflows::class)
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
     * Visibility of a runner group. You can select all repositories, select individual repositories, or all private repositories.
     */
    public function visibility() : ?string
    {
        return $this->visibility;
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
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C974B57Ee44B32D2543D285Ad47520954\SelectedWorkflows>
     */
    public function selected_workflows() : array
    {
        return $this->selected_workflows;
    }
}
