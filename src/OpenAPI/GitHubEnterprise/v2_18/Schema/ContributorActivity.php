<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\ContributorActivity\Weeks;

final class ContributorActivity
{
    public const SCHEMA_TITLE       = 'Contributor Activity';
    public const SCHEMA_DESCRIPTION = 'Contributor Activity';
    private $author;
    private ?int $total = null;
    /**
     * @var array<Weeks>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\ContributorActivity\Weeks::class)
     */
    private array $weeks = [];

    public function author()
    {
        return $this->author;
    }

    public function total(): ?int
    {
        return $this->total;
    }

    public function weeks(): array
    {
        return $this->weeks;
    }
}
