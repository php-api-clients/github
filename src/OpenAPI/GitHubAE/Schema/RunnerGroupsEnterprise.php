<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class RunnerGroupsEnterprise
{
    public const SCHEMA_TITLE = 'runner-groups-enterprise';
    public const SPL_HASH = '000000005dfdae070000000040885a06';
    public const SCHEMA_DESCRIPTION = '';
    private ?number $id = null;
    private ?string $name = null;
    private ?string $visibility = null;
    private ?bool $default = null;
    private ?string $selected_organizations_url = null;
    private ?string $runners_url = null;
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
    public function selected_organizations_url() : ?string
    {
        return $this->selected_organizations_url;
    }
    public function runners_url() : ?string
    {
        return $this->runners_url;
    }
    public function allows_public_repositories() : ?bool
    {
        return $this->allows_public_repositories;
    }
}
