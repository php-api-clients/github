<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimGroupListEnterprise;

final class Resources
{
    public const SCHEMA_TITLE = 'scim-group-list-enterprise::Resources';
    public const SCHEMA_DESCRIPTION = '';
    private array $schemas = array();
    private string $id;
    private ?string $externalId = null;
    private ?string $displayName = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimGroupListEnterprise\Resources\Members>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimGroupListEnterprise\Resources\Members::class)
     */
    private array $members = array();
    private array $meta = array();
    public function schemas() : array
    {
        return $this->schemas;
    }
    public function id() : string
    {
        return $this->id;
    }
    public function externalId() : ?string
    {
        return $this->externalId;
    }
    public function displayName() : ?string
    {
        return $this->displayName;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimGroupListEnterprise\Resources\Members>
     */
    public function members() : array
    {
        return $this->members;
    }
    public function meta() : array
    {
        return $this->meta;
    }
}
