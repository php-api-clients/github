<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class TeamFull
{
    public const SCHEMA_TITLE       = 'Full Team';
    public const SCHEMA_DESCRIPTION = 'Groups of organization members that gives permissions on specified repositories.';
    /**
     * Unique identifier of the team
     */
    private ?int $id         = null;
    private ?string $node_id = null;
    /**
     * URL for the team
     */
    private ?string $url      = null;
    private ?string $html_url = null;
    /**
     * Name of the team
     */
    private ?string $name        = null;
    private ?string $slug        = null;
    private ?string $description = null;
    /**
     * The level of privacy this team should have
     */
    private ?string $privacy = null;
    /**
     * Permission that the team will have for its repositories
     */
    private ?string $permission       = null;
    private ?string $members_url      = null;
    private ?string $repositories_url = null;
    private $parent;
    private ?int $members_count = null;
    private ?int $repos_count   = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    /**
     * Organization Full
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationFull::class)
     */
    private ?OrganizationFull $organization = null;
    /**
     * Distinguished Name (DN) that team maps to within LDAP environment
     */
    private ?string $ldap_dn = null;

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

    /**
     * Name of the team
     */
    public function name(): ?string
    {
        return $this->name;
    }

    public function slug(): ?string
    {
        return $this->slug;
    }

    public function description(): ?string
    {
        return $this->description;
    }

    /**
     * The level of privacy this team should have
     */
    public function privacy(): ?string
    {
        return $this->privacy;
    }

    /**
     * Permission that the team will have for its repositories
     */
    public function permission(): ?string
    {
        return $this->permission;
    }

    public function members_url(): ?string
    {
        return $this->members_url;
    }

    public function repositories_url(): ?string
    {
        return $this->repositories_url;
    }

    public function parent()
    {
        return $this->parent;
    }

    public function members_count(): ?int
    {
        return $this->members_count;
    }

    public function repos_count(): ?int
    {
        return $this->repos_count;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    /**
     * Organization Full
     */
    public function organization(): ?OrganizationFull
    {
        return $this->organization;
    }

    /**
     * Distinguished Name (DN) that team maps to within LDAP environment
     */
    public function ldap_dn(): ?string
    {
        return $this->ldap_dn;
    }
}
