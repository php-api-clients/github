<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimGroupListEnterprise;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimGroupListEnterprise\Resources\Members;

final class Resources
{
    public const SCHEMA_TITLE       = 'scim-group-list-enterprise::Resources';
    public const SCHEMA_DESCRIPTION = '';
    private array $schemas          = [];
    private string $id;
    private string $externalId;
    private string $displayName;
    /**
     * @var array<Members>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimGroupListEnterprise\Resources\Members::class)
     */
    private array $members = [];
    private array $meta    = [];

    public function schemas(): array
    {
        return $this->schemas;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function externalId(): string
    {
        return $this->externalId;
    }

    public function displayName(): string
    {
        return $this->displayName;
    }

    /**
     * @return array<Members>
     */
    public function members(): array
    {
        return $this->members;
    }

    public function meta(): array
    {
        return $this->meta;
    }
}
