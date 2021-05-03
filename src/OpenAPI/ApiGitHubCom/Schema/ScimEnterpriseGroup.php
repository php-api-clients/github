<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ScimEnterpriseGroup
{
    public const SCHEMA_TITLE = 'scim-enterprise-group';
    public const SPL_HASH = '00000000729dc7d200000000797f0b2e';
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
