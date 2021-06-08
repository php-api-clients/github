<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BranchRestrictionPolicy;

final class Teams
{
    public const SCHEMA_TITLE       = 'branch-restriction-policy::teams';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $node_id;
    private string $url;
    private string $html_url;
    private string $name;
    private string $slug;
    private string $description;
    private string $privacy;
    private string $permission;
    private string $members_url;
    private string $repositories_url;
    private string $parent;

    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function html_url(): string
    {
        return $this->html_url;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function slug(): string
    {
        return $this->slug;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function privacy(): string
    {
        return $this->privacy;
    }

    public function permission(): string
    {
        return $this->permission;
    }

    public function members_url(): string
    {
        return $this->members_url;
    }

    public function repositories_url(): string
    {
        return $this->repositories_url;
    }

    public function parent(): string
    {
        return $this->parent;
    }
}
