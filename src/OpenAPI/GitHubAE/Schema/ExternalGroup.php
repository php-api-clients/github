<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ExternalGroup
{
    public const SCHEMA_TITLE = 'ExternalGroup';
    public const SCHEMA_DESCRIPTION = 'Information about an external group\'s usage and its members';
    /**
     * The internal ID of the group
     */
    private int $group_id;
    /**
     * The display name for the group
     */
    private string $group_name;
    /**
     * The date when the group was last updated_at
     */
    private ?string $updated_at = null;
    /**
     * An array of teams linked to this group
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroup\Teams>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroup\Teams::class)
     */
    private array $teams = array();
    /**
     * An array of external members linked to this group
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroup\Members>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroup\Members::class)
     */
    private array $members = array();
    /**
     * The internal ID of the group
     */
    public function group_id() : int
    {
        return $this->group_id;
    }
    /**
     * The display name for the group
     */
    public function group_name() : string
    {
        return $this->group_name;
    }
    /**
     * The date when the group was last updated_at
     */
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    /**
     * An array of teams linked to this group
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroup\Teams>
     */
    public function teams() : array
    {
        return $this->teams;
    }
    /**
     * An array of external members linked to this group
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroup\Members>
     */
    public function members() : array
    {
        return $this->members;
    }
}
