<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class Project
{
    public const SCHEMA_TITLE = 'Project';
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
    private ?string $body = null;
    private int $number;
    /**
     * State of the project; either 'open' or 'closed'
     */
    private string $state;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\NullableSimpleUser $creator = null;
    private string $created_at;
    private string $updated_at;
    /**
     * The baseline permission that all organization members have on this project. Only present if owner is an organization.
     */
    private ?string $organization_permission = null;
    /**
     * Whether or not this project can be seen by everyone. Only present if owner is an organization.
     */
    private ?bool $private = null;
    public function owner_url() : string
    {
        return $this->owner_url;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function columns_url() : string
    {
        return $this->columns_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * Name of the project
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Body of the project
     */
    public function body() : ?string
    {
        return $this->body;
    }
    public function number() : int
    {
        return $this->number;
    }
    /**
     * State of the project; either 'open' or 'closed'
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * Simple User
     */
    public function creator() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\NullableSimpleUser
    {
        return $this->creator;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * The baseline permission that all organization members have on this project. Only present if owner is an organization.
     */
    public function organization_permission() : ?string
    {
        return $this->organization_permission;
    }
    /**
     * Whether or not this project can be seen by everyone. Only present if owner is an organization.
     */
    public function private() : ?bool
    {
        return $this->private;
    }
}
