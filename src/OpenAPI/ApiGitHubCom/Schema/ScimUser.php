<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUser\Emails;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUser\Operations;

final class ScimUser
{
    public const SCHEMA_TITLE       = 'SCIM /Users';
    public const SCHEMA_DESCRIPTION = 'SCIM /Users provisioning endpoints';
    /**
     * SCIM schema used.
     */
    private array $schemas = [];
    /**
     * Unique identifier of an external identity
     */
    private string $id;
    /**
     * The ID of the User.
     */
    private string $externalId;
    /**
     * Configured by the admin. Could be an email, login, or username
     */
    private string $userName;
    /**
     * The name of the user, suitable for display to end-users
     */
    private string $displayName;
    private array $name = [];
    /**
     * user emails
     *
     * @var array<Emails>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUser\Emails::class)
     */
    private array $emails = [];
    /**
     * The active status of the User.
     */
    private bool $active;
    private array $meta = [];
    /**
     * The ID of the organization.
     */
    private int $organization_id;
    /**
     * Set of operations to be performed
     *
     * @var array<Operations>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUser\Operations::class)
     */
    private array $operations = [];
    /**
     * associated groups
     */
    private array $groups = [];

    /**
     * SCIM schema used.
     */
    public function schemas(): array
    {
        return $this->schemas;
    }

    /**
     * Unique identifier of an external identity
     */
    public function id(): string
    {
        return $this->id;
    }

    /**
     * The ID of the User.
     */
    public function externalId(): string
    {
        return $this->externalId;
    }

    /**
     * Configured by the admin. Could be an email, login, or username
     */
    public function userName(): string
    {
        return $this->userName;
    }

    /**
     * The name of the user, suitable for display to end-users
     */
    public function displayName(): string
    {
        return $this->displayName;
    }

    public function name(): array
    {
        return $this->name;
    }

    /**
     * user emails
     *
     * @return array<Emails>
     */
    public function emails(): array
    {
        return $this->emails;
    }

    /**
     * The active status of the User.
     */
    public function active(): bool
    {
        return $this->active;
    }

    public function meta(): array
    {
        return $this->meta;
    }

    /**
     * The ID of the organization.
     */
    public function organization_id(): int
    {
        return $this->organization_id;
    }

    /**
     * Set of operations to be performed
     *
     * @return array<Operations>
     */
    public function operations(): array
    {
        return $this->operations;
    }

    /**
     * associated groups
     */
    public function groups(): array
    {
        return $this->groups;
    }
}
