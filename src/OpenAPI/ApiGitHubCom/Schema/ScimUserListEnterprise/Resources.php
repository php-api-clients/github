<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUserListEnterprise;

final class Resources
{
    public const SCHEMA_TITLE = 'scim-user-list-enterprise::Resources';
    public const SCHEMA_DESCRIPTION = '';
    private array $schemas = array();
    private string $id;
    private ?string $externalId = null;
    private ?string $userName = null;
    private ?array $name = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUserListEnterprise\Resources\Emails>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUserListEnterprise\Resources\Emails::class)
     */
    private ?array $emails = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUserListEnterprise\Resources\Groups>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUserListEnterprise\Resources\Groups::class)
     */
    private ?array $groups = array();
    private ?bool $active = null;
    private ?array $meta = array();
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
    public function name() : ?array
    {
        return $this->name;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUserListEnterprise\Resources\Emails>
     */
    public function emails() : ?array
    {
        return $this->emails;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUserListEnterprise\Resources\Groups>
     */
    public function groups() : ?array
    {
        return $this->groups;
    }
    public function active() : ?bool
    {
        return $this->active;
    }
    public function meta() : ?array
    {
        return $this->meta;
    }
}
