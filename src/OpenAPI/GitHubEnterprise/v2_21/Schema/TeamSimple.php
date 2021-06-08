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
    private int $id;
    private string $node_id;
    /**
     * URL for the team
     */
    private string $url;
    private string $members_url;
    /**
     * Name of the team
     */
    private string $name;
    /**
     * Description of the team
     */
    private string $description;
    /**
     * Permission that the team will have for its repositories
     */
    private string $permission;
    /**
     * The level of privacy this team should have
     */
    private string $privacy;
    private string $html_url;
    private string $repositories_url;
    private string $slug;
    /**
     * Distinguished Name (DN) that team maps to within LDAP environment
     */
    private string $ldap_dn;

    /**
     * Unique identifier of the team
     */
    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    /**
     * URL for the team
     */
    public function url(): string
    {
        return $this->url;
    }

    public function members_url(): string
    {
        return $this->members_url;
    }

    /**
     * Name of the team
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * Description of the team
     */
    public function description(): string
    {
        return $this->description;
    }

    /**
     * Permission that the team will have for its repositories
     */
    public function permission(): string
    {
        return $this->permission;
    }

    /**
     * The level of privacy this team should have
     */
    public function privacy(): string
    {
        return $this->privacy;
    }

    public function html_url(): string
    {
        return $this->html_url;
    }

    public function repositories_url(): string
    {
        return $this->repositories_url;
    }

    public function slug(): string
    {
        return $this->slug;
    }

    /**
     * Distinguished Name (DN) that team maps to within LDAP environment
     */
    public function ldap_dn(): string
    {
        return $this->ldap_dn;
    }
}
