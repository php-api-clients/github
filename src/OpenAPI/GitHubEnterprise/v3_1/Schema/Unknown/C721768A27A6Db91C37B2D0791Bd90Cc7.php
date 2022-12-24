<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C721768A27A6Db91C37B2D0791Bd90Cc7
{
    public const SCHEMA_JSON = '{"required":["reviewers"],"type":"object","properties":{"reviewers":{"type":"array","items":{"type":"string"},"description":"An array of user `login`s that will be removed."},"team_reviewers":{"type":"array","items":{"type":"string"},"description":"An array of team `slug`s that will be removed."}}}';
    public const SCHEMA_TITLE = 'c_721768a27a6db91c37b2d0791bd90cc7';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An array of user `login`s that will be removed.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $reviewers = array();
    /**
     * An array of team `slug`s that will be removed.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $team_reviewers = array();
    /**
     * An array of user `login`s that will be removed.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function reviewers() : array
    {
        return $this->reviewers;
    }
    /**
     * An array of team `slug`s that will be removed.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function team_reviewers() : array
    {
        return $this->team_reviewers;
    }
}
