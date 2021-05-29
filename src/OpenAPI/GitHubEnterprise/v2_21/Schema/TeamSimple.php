<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class TeamSimple
{
    public const SCHEMA_TITLE       = 'Team Simple';
    public const SCHEMA_DESCRIPTION = 'Groups of organization members that gives permissions on specified repositories.';
    /**
     * Unique identifier of the team
     */
    private ?int $id         = null;
    private ?string $node_id = null;
    /**
     * URL for the team
     */
    private ?string $url         = null;
    private ?string $members_url = null;
    /**
     * Name of the team
     */
    private ?string $name = null;
    /**
     * Description of the team
     */
    private ?string $description = null;
    /**
     * Permission that the team will have for its repositories
     */
    private ?string $permission = null;
    /**
     * The level of privacy this team should have
     */
    private ?string $privacy          = null;
    private ?string $html_url         = null;
    private ?string $repositories_url = null;
    private ?string $slug             = null;
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

    public function members_url(): ?string
    {
        return $this->members_url;
    }

    /**
     * Name of the team
     */
    public function name(): ?string
    {
        return $this->name;
    }

    /**
     * Description of the team
     */
    public function description(): ?string
    {
        return $this->description;
    }

    /**
     * Permission that the team will have for its repositories
     */
    public function permission(): ?string
    {
        return $this->permission;
    }

    /**
     * The level of privacy this team should have
     */
    public function privacy(): ?string
    {
        return $this->privacy;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function repositories_url(): ?string
    {
        return $this->repositories_url;
    }

    public function slug(): ?string
    {
        return $this->slug;
    }

    /**
     * Distinguished Name (DN) that team maps to within LDAP environment
     */
    public function ldap_dn(): ?string
    {
        return $this->ldap_dn;
    }
}
