<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class Project
{
    public const SCHEMA_TITLE       = 'Project';
    public const SCHEMA_DESCRIPTION = 'Projects are a way to organize columns and cards of work.';
    private string $owner_url;
    private string $url;
    private string $html_url;
    private string $columns_url;
    private int $id;
    private string $node_id;
    /**
     * Name of the project
     */
    private string $name;
    /**
     * Body of the project
     */
    private string $body;
    private int $number;
    /**
     * State of the project; either 'open' or 'closed'
     */
    private string $state;
    private $creator;
    private string $created_at;
    private string $updated_at;
    /**
     * The baseline permission that all organization members have on this project. Only present if owner is an organization.
     */
    private string $organization_permission;
    /**
     * Whether or not this project can be seen by everyone. Only present if owner is an organization.
     */
    private bool $private;

    public function owner_url(): string
    {
        return $this->owner_url;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function html_url(): string
    {
        return $this->html_url;
    }

    public function columns_url(): string
    {
        return $this->columns_url;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    /**
     * Name of the project
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * Body of the project
     */
    public function body(): string
    {
        return $this->body;
    }

    public function number(): int
    {
        return $this->number;
    }

    /**
     * State of the project; either 'open' or 'closed'
     */
    public function state(): string
    {
        return $this->state;
    }

    public function creator()
    {
        return $this->creator;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }

    public function updated_at(): string
    {
        return $this->updated_at;
    }

    /**
     * The baseline permission that all organization members have on this project. Only present if owner is an organization.
     */
    public function organization_permission(): string
    {
        return $this->organization_permission;
    }

    /**
     * Whether or not this project can be seen by everyone. Only present if owner is an organization.
     */
    public function private(): bool
    {
        return $this->private;
    }
}