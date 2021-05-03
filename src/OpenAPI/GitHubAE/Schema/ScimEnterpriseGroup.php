<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ScimEnterpriseGroup
{
    public const SCHEMA_TITLE = 'scim-enterprise-group';
    public const SPL_HASH = '000000001f77f28b000000002b0b9da2';
    public const SCHEMA_DESCRIPTION = '';
    private array $schemas = array();
    private ?string $id = null;
    private ?string $externalId = null;
    private ?string $displayName = null;
    private array $members = array();
    private ?object $meta = null;
    public function schemas() : array
    {
        return $this->schemas;
    }
    public function id() : ?string
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
    public function members() : array
    {
        return $this->members;
    }
    public function meta() : ?object
    {
        return $this->meta;
    }
}
