<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class PullRequestReviewRequest
{
    public const SCHEMA_TITLE       = 'Pull Request Review Request';
    public const SCHEMA_DESCRIPTION = 'Pull Request Review Request';
    /**
     * @var array<SimpleUser>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser::class)
     */
    private array $users = [];
    /**
     * @var array<TeamSimple>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamSimple::class)
     */
    private array $teams = [];

    /**
     * @return array<SimpleUser>
     */
    public function users(): array
    {
        return $this->users;
    }

    /**
     * @return array<TeamSimple>
     */
    public function teams(): array
    {
        return $this->teams;
    }
}
