<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RunnerGroupsEnterprise
{
    public const SCHEMA_TITLE = 'runner-groups-enterprise';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $name;
    private string $visibility;
    private bool $default;
    private ?string $selected_organizations_url = null;
    private string $runners_url;
    private bool $allows_public_repositories;
    /**
     * If `true`, the `restricted_to_workflows` and `selected_workflows` fields cannot be modified.
     */
    private ?bool $workflow_restrictions_read_only = null;
    /**
     * If `true`, the runner group will be restricted to running only the workflows specified in the `selected_workflows` array.
     */
    private ?bool $restricted_to_workflows = null;
    /**
     * List of workflows the runner group should be allowed to run. This setting will be ignored unless `restricted_to_workflows` is set to `true`.
     */
    private array $selected_workflows = array();
    public function id() : int
    {
        return $this->id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function visibility() : string
    {
        return $this->visibility;
    }
    public function default() : bool
    {
        return $this->default;
    }
    public function selected_organizations_url() : ?string
    {
        return $this->selected_organizations_url;
    }
    public function runners_url() : string
    {
        return $this->runners_url;
    }
    public function allows_public_repositories() : bool
    {
        return $this->allows_public_repositories;
    }
    /**
     * If `true`, the `restricted_to_workflows` and `selected_workflows` fields cannot be modified.
     */
    public function workflow_restrictions_read_only() : ?bool
    {
        return $this->workflow_restrictions_read_only;
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
     */
    public function selected_workflows() : array
    {
        return $this->selected_workflows;
    }
}
