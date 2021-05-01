<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ScimEnterpriseGroup
{
    public const SCHEMA_TITLE = 'scim-enterprise-group';
    public const SCHEMA_DESCRIPTION = '';
    private array $schemas;
    private string $id;
    private string $externalId;
    private string $displayName;
    private array $members;
    private object $meta;
    public function schemas() : array
    {
        return $this->schemas;
    }
    public function id() : string
    {
        return $this->id;
    }
    public function externalId() : string
    {
        return $this->externalId;
    }
    public function displayName() : string
    {
        return $this->displayName;
    }
    public function members() : array
    {
        return $this->members;
    }
    public function meta() : object
    {
        return $this->meta;
    }
}
