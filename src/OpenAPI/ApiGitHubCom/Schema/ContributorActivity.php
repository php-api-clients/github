<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContributorActivity\Weeks;

final class ContributorActivity
{
    public const SCHEMA_TITLE       = 'Contributor Activity';
    public const SCHEMA_DESCRIPTION = 'Contributor Activity';
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class) */
    private SimpleUser $author;
    private int $total;
    /**
     * @var array<Weeks>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContributorActivity\Weeks::class)
     */
    private array $weeks = [];

    public function author(): SimpleUser
    {
        return $this->author;
    }

    public function total(): int
    {
        return $this->total;
    }

    /**
     * @return array<Weeks>
     */
    public function weeks(): array
    {
        return $this->weeks;
    }
}
