<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class RunnerGroupsOrg
{
    public const SCHEMA_TITLE       = 'runner-groups-org';
    public const SCHEMA_DESCRIPTION = '';
    private number $id;
    private string $name;
    private string $visibility;
    private bool $default;
    /**
     * Link to the selected repositories resource for this runner group. Not present unless visibility was set to `selected`
     */
    private string $selected_repositories_url;
    private string $runners_url;
    private bool $inherited;
    private bool $inherited_allows_public_repositories;
    private bool $allows_public_repositories;

    public function id(): number
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function visibility(): string
    {
        return $this->visibility;
    }

    public function default(): bool
    {
        return $this->default;
    }

    /**
     * Link to the selected repositories resource for this runner group. Not present unless visibility was set to `selected`
     */
    public function selected_repositories_url(): string
    {
        return $this->selected_repositories_url;
    }

    public function runners_url(): string
    {
        return $this->runners_url;
    }

    public function inherited(): bool
    {
        return $this->inherited;
    }

    public function inherited_allows_public_repositories(): bool
    {
        return $this->inherited_allows_public_repositories;
    }

    public function allows_public_repositories(): bool
    {
        return $this->allows_public_repositories;
    }
}