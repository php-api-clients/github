<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ScimUserList
{
    public const SCHEMA_TITLE       = 'SCIM User List';
    public const SCHEMA_DESCRIPTION = 'SCIM User List';
    /**
     * SCIM schema used.
     */
    private array $schemas     = [];
    private ?int $totalResults = null;
    private ?int $itemsPerPage = null;
    private ?int $startIndex   = null;
    private array $Resources   = [];

    /**
     * SCIM schema used.
     */
    public function schemas(): array
    {
        return $this->schemas;
    }

    public function totalResults(): ?int
    {
        return $this->totalResults;
    }

    public function itemsPerPage(): ?int
    {
        return $this->itemsPerPage;
    }

    public function startIndex(): ?int
    {
        return $this->startIndex;
    }

    /**
     * @return array<ScimUser>
     */
    public function Resources(): array
    {
        return $this->Resources;
    }
}
