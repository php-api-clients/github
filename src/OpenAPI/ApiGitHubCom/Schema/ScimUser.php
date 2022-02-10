<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ScimUser
{
    public const SCHEMA_TITLE = 'SCIM /Users';
    public const SCHEMA_DESCRIPTION = 'SCIM /Users provisioning endpoints';
    /**
     * SCIM schema used.
     */
    private array $schemas = array();
    /**
     * Unique identifier of an external identity
     */
    private string $id;
    /**
     * The ID of the User.
     */
    private ?string $externalId = null;
    /**
     * Configured by the admin. Could be an email, login, or username
     */
    private ?string $userName = null;
    /**
     * The name of the user, suitable for display to end-users
     */
    private ?string $displayName = null;
    private array $name = array();
    /**
     * user emails
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUser\Emails>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUser\Emails::class)
     */
    private array $emails = array();
    /**
     * The active status of the User.
     */
    private bool $active;
    private array $meta = array();
    /**
     * The ID of the organization.
     */
    private ?int $organization_id = null;
    /**
     * Set of operations to be performed
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUser\Operations>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUser\Operations::class)
     */
    private array $operations = array();
    /**
     * associated groups
     */
    private array $groups = array();
    /**
     * SCIM schema used.
     */
    public function schemas() : array
    {
        return $this->schemas;
    }
    /**
     * Unique identifier of an external identity
     */
    public function id() : string
    {
        return $this->id;
    }
    /**
     * The ID of the User.
     */
    public function externalId() : ?string
    {
        return $this->externalId;
    }
    /**
     * Configured by the admin. Could be an email, login, or username
     */
    public function userName() : ?string
    {
        return $this->userName;
    }
    /**
     * The name of the user, suitable for display to end-users
     */
    public function displayName() : ?string
    {
        return $this->displayName;
    }
    public function name() : array
    {
        return $this->name;
    }
    /**
     * user emails
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUser\Emails>
     */
    public function emails() : array
    {
        return $this->emails;
    }
    /**
     * The active status of the User.
     */
    public function active() : bool
    {
        return $this->active;
    }
    public function meta() : array
    {
        return $this->meta;
    }
    /**
     * The ID of the organization.
     */
    public function organization_id() : ?int
    {
        return $this->organization_id;
    }
    /**
     * Set of operations to be performed
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUser\Operations>
     */
    public function operations() : array
    {
        return $this->operations;
    }
    /**
     * associated groups
     */
    public function groups() : array
    {
        return $this->groups;
    }
}
