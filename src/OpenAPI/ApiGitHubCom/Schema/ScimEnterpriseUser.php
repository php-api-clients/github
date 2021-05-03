<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ScimEnterpriseUser
{
    public const SCHEMA_TITLE = 'scim-enterprise-user';
    public const SCHEMA_DESCRIPTION = '';
    private array $schemas = array();
    private ?string $id = null;
    private ?string $externalId = null;
    private ?string $userName = null;
    private ?object $name = null;
    private array $emails = array();
    private array $groups = array();
    private ?bool $active = null;
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
    public function userName() : ?string
    {
        return $this->userName;
    }
    public function name() : ?object
    {
        return $this->name;
    }
    public function emails() : array
    {
        return $this->emails;
    }
    public function groups() : array
    {
        return $this->groups;
    }
    public function active() : ?bool
    {
        return $this->active;
    }
    public function meta() : ?object
    {
        return $this->meta;
    }
}
