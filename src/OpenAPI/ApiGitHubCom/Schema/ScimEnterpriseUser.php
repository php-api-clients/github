<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimEnterpriseUser\Emails;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimEnterpriseUser\Groups;

final class ScimEnterpriseUser
{
    public const SCHEMA_TITLE       = 'scim-enterprise-user';
    public const SCHEMA_DESCRIPTION = '';
    private array $schemas          = [];
    private ?string $id             = null;
    private ?string $externalId     = null;
    private ?string $userName       = null;
    private array $name             = [];
    private array $emails           = [];
    private array $groups           = [];
    private ?bool $active           = null;
    private array $meta             = [];

    public function schemas(): array
    {
        return $this->schemas;
    }

    public function id(): ?string
    {
        return $this->id;
    }

    public function externalId(): ?string
    {
        return $this->externalId;
    }

    public function userName(): ?string
    {
        return $this->userName;
    }

    public function name(): array
    {
        return $this->name;
    }

    /**
     * @return array<Emails>
     */
    public function emails(): array
    {
        return $this->emails;
    }

    /**
     * @return array<Groups>
     */
    public function groups(): array
    {
        return $this->groups;
    }

    public function active(): ?bool
    {
        return $this->active;
    }

    public function meta(): array
    {
        return $this->meta;
    }
}
