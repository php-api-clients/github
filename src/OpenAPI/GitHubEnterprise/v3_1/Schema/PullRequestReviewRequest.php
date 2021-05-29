<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class PullRequestReviewRequest
{
    public const SCHEMA_TITLE       = 'Pull Request Review Request';
    public const SCHEMA_DESCRIPTION = 'Pull Request Review Request';
    private array $users            = [];
    private array $teams            = [];

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
