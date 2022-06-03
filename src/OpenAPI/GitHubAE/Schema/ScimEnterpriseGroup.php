<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ScimEnterpriseGroup
{
    public const SCHEMA_TITLE = 'scim-enterprise-group';
    public const SCHEMA_DESCRIPTION = '';
    private array $schemas = array();
    private string $id;
    private ?string $externalId = null;
    private ?string $displayName = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimEnterpriseGroup\Members>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimEnterpriseGroup\Members::class)
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
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimEnterpriseGroup\Members>
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
