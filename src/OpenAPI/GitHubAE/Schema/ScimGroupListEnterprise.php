<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ScimGroupListEnterprise\Resources;

final class ScimGroupListEnterprise
{
    public const SCHEMA_TITLE       = 'scim-group-list-enterprise';
    public const SCHEMA_DESCRIPTION = '';
    private array $schemas          = [];
    private ?number $totalResults   = null;
    private ?number $itemsPerPage   = null;
    private ?number $startIndex     = null;
    private array $Resources        = [];

    public function schemas(): array
    {
        return $this->schemas;
    }

    public function totalResults(): ?number
    {
        return $this->totalResults;
    }

    public function itemsPerPage(): ?number
    {
        return $this->itemsPerPage;
    }

    public function startIndex(): ?number
    {
        return $this->startIndex;
    }

    /**
     * @return array<Resources>
     */
    public function Resources(): array
    {
        return $this->Resources;
    }
}
