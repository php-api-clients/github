<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class RunnerGroupsEnterprise
{
    public const SCHEMA_JSON = '{"required":["id","name","visibility","allows_public_repositories","default","runners_url"],"type":"object","properties":{"id":{"type":"number"},"name":{"type":"string"},"visibility":{"type":"string"},"default":{"type":"boolean"},"selected_organizations_url":{"type":"string"},"runners_url":{"type":"string"},"allows_public_repositories":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'runner-groups-enterprise';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $name;
    private string $visibility;
    private bool $default;
    private ?string $selected_organizations_url = null;
    private string $runners_url;
    private bool $allows_public_repositories;
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
}