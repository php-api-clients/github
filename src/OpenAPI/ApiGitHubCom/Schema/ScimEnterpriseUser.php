<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ScimEnterpriseUser
{
    public const SCHEMA_TITLE = 'scim-enterprise-user';
    public const SCHEMA_DESCRIPTION = '';
    private array $schemas;
    private string $id;
    private string $externalId;
    private string $userName;
    private object $name;
    private array $emails;
    private array $groups;
    private boolean $active;
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
    public function userName() : string
    {
        return $this->userName;
    }
    public function name() : object
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
    public function active() : boolean
    {
        return $this->active;
    }
    public function meta() : object
    {
        return $this->meta;
    }
}
