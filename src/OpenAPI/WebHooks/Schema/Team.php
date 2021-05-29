<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Team
{
    public const SCHEMA_TITLE       = 'Team';
    public const SCHEMA_DESCRIPTION = 'Groups of organization members that gives permissions on specified repositories.';
    /**
     * Name of the team
     */
    private ?string $name = null;
    /**
     * Unique identifier of the team
     */
    private ?int $id         = null;
    private ?string $node_id = null;
    private ?string $slug    = null;
    /**
     * Description of the team
     */
    private $description;
    private ?string $privacy = null;
    /**
     * URL for the team
     */
    private ?string $url              = null;
    private ?string $html_url         = null;
    private ?string $members_url      = null;
    private ?string $repositories_url = null;
    /**
     * Permission that the team will have for its repositories
     */
    private ?string $permission = null;
    private $parent;

    /**
     * Name of the team
     */
    public function name(): ?string
    {
        return $this->name;
    }

    /**
     * Unique identifier of the team
     */
    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function slug(): ?string
    {
        return $this->slug;
    }

    /**
     * Description of the team
     */
    public function description()
    {
        return $this->description;
    }

    public function privacy(): ?string
    {
        return $this->privacy;
    }

    /**
     * URL for the team
     */
    public function url(): ?string
    {
        return $this->url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function members_url(): ?string
    {
        return $this->members_url;
    }

    public function repositories_url(): ?string
    {
        return $this->repositories_url;
    }

    /**
     * Permission that the team will have for its repositories
     */
    public function permission(): ?string
    {
        return $this->permission;
    }

    public function parent()
    {
        return $this->parent;
    }
}
