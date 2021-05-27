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
    private ?string $id = null;
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
     */
    private array $emails = array();
    /**
     * The active status of the User.
     */
    private ?bool $active = null;
    private array $meta = array();
    /**
     * The ID of the organization.
     */
    private ?int $organization_id = null;
    /**
     * Set of operations to be performed
     */
    private array $operations = array();
    /**
     * associated groups
     */
    private array $groups = array();
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
    public function displayName() : ?string
    {
        return $this->displayName;
    }
    public function name() : array
    {
        return $this->name;
    }
    public function emails() : array
    {
        return $this->emails;
    }
    public function active() : ?bool
    {
        return $this->active;
    }
    public function meta() : array
    {
        return $this->meta;
    }
    public function organization_id() : ?int
    {
        return $this->organization_id;
    }
    public function operations() : array
    {
        return $this->operations;
    }
    public function groups() : array
    {
        return $this->groups;
    }
}
