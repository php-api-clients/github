<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimEnterpriseGroup\Members;

final class ScimEnterpriseGroup
{
    public const SCHEMA_TITLE       = 'scim-enterprise-group';
    public const SCHEMA_DESCRIPTION = '';
    private array $schemas          = [];
    private ?string $id             = null;
    private ?string $externalId     = null;
    private ?string $displayName    = null;
    /**
     * @var array<Members>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimEnterpriseGroup\Members::class)
     */
    private array $members = [];
    private array $meta    = [];

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

    public function displayName(): ?string
    {
        return $this->displayName;
    }

    public function members(): array
    {
        return $this->members;
    }

    public function meta(): array
    {
        return $this->meta;
    }
}
