<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class RunnerGroupsOrg
{
    public const SCHEMA_JSON = '{"required":["id","name","visibility","default","runners_url","inherited","allows_public_repositories"],"type":"object","properties":{"id":{"type":"number"},"name":{"type":"string"},"visibility":{"type":"string"},"default":{"type":"boolean"},"selected_repositories_url":{"type":"string","description":"Link to the selected repositories resource for this runner group. Not present unless visibility was set to `selected`"},"runners_url":{"type":"string"},"inherited":{"type":"boolean"},"inherited_allows_public_repositories":{"type":"boolean"},"allows_public_repositories":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'runner-groups-org';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $name;
    private string $visibility;
    private bool $default;
    /**
     * Link to the selected repositories resource for this runner group. Not present unless visibility was set to `selected`
     */
    private ?string $selected_repositories_url = null;
    private string $runners_url;
    private bool $inherited;
    private ?bool $inherited_allows_public_repositories = null;
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
    /**
     * Link to the selected repositories resource for this runner group. Not present unless visibility was set to `selected`
     */
    public function selected_repositories_url() : ?string
    {
        return $this->selected_repositories_url;
    }
    public function runners_url() : string
    {
        return $this->runners_url;
    }
    public function inherited() : bool
    {
        return $this->inherited;
    }
    public function inherited_allows_public_repositories() : ?bool
    {
        return $this->inherited_allows_public_repositories;
    }
    public function allows_public_repositories() : bool
    {
        return $this->allows_public_repositories;
    }
}
