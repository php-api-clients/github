<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ScimEnterpriseUser
{
    public const SCHEMA_TITLE = 'scim-enterprise-user';
    public const SCHEMA_DESCRIPTION = '';
    private array $schemas = array();
    private string $id;
    private ?string $externalId = null;
    private ?string $userName = null;
    private array $name = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimEnterpriseUser\Emails>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimEnterpriseUser\Emails::class)
     */
    private array $emails = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimEnterpriseUser\Groups>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimEnterpriseUser\Groups::class)
     */
    private array $groups = array();
    private ?bool $active = null;
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
    public function userName() : ?string
    {
        return $this->userName;
    }
    public function name() : array
    {
        return $this->name;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimEnterpriseUser\Emails>
     */
    public function emails() : array
    {
        return $this->emails;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimEnterpriseUser\Groups>
     */
    public function groups() : array
    {
        return $this->groups;
    }
    public function active() : ?bool
    {
        return $this->active;
    }
    public function meta() : array
    {
        return $this->meta;
    }
}
