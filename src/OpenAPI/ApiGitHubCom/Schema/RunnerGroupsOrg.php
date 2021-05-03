<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RunnerGroupsOrg
{
    public const SCHEMA_TITLE = 'runner-groups-org';
    public const SPL_HASH = '000000000cd520e10000000040effa88';
    public const SCHEMA_DESCRIPTION = '';
    private ?number $id = null;
    private ?string $name = null;
    private ?string $visibility = null;
    private ?bool $default = null;
    /**
     * Link to the selected repositories resource for this runner group. Not present unless visibility was set to `selected`
     */
    private ?string $selected_repositories_url = null;
    private ?string $runners_url = null;
    private ?bool $inherited = null;
    private ?bool $inherited_allows_public_repositories = null;
    private ?bool $allows_public_repositories = null;
    public function id() : ?number
    {
        return $this->id;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function visibility() : ?string
    {
        return $this->visibility;
    }
    public function default() : ?bool
    {
        return $this->default;
    }
    public function selected_repositories_url() : ?string
    {
        return $this->selected_repositories_url;
    }
    public function runners_url() : ?string
    {
        return $this->runners_url;
    }
    public function inherited() : ?bool
    {
        return $this->inherited;
    }
    public function inherited_allows_public_repositories() : ?bool
    {
        return $this->inherited_allows_public_repositories;
    }
    public function allows_public_repositories() : ?bool
    {
        return $this->allows_public_repositories;
    }
}
