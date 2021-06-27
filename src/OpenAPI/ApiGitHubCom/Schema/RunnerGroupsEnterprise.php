<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RunnerGroupsEnterprise
{
    public const SCHEMA_TITLE = 'runner-groups-enterprise';
    public const SCHEMA_DESCRIPTION = '';
    private number $id;
    private string $name;
    private string $visibility;
    private bool $default;
    private ?string $selected_organizations_url = null;
    private string $runners_url;
    private bool $allows_public_repositories;
    public function id() : number
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
}
