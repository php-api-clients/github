<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class PullRequestReviewRequest
{
    public const SCHEMA_TITLE = 'Pull Request Review Request';
    public const SPL_HASH = '000000000c1cef570000000065732ccc';
    public const SCHEMA_DESCRIPTION = 'Pull Request Review Request';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser>
     */
    private array $users;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamSimple>
     */
    private array $teams;
    public function users() : array
    {
        return $this->users;
    }
    public function teams() : array
    {
        return $this->teams;
    }
}
