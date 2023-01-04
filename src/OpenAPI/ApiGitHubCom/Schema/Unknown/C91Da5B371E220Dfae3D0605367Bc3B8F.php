<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C91Da5B371E220Dfae3D0605367Bc3B8F
{
    public const SCHEMA_JSON = '{"type":"object","anyOf":[{"required":["reviewers"]},{"required":["team_reviewers"]}],"properties":{"reviewers":{"type":"array","items":{"type":"string"},"description":"An array of user `login`s that will be requested."},"team_reviewers":{"type":"array","items":{"type":"string"},"description":"An array of team `slug`s that will be requested."}}}';
    public const SCHEMA_TITLE = 'c_91da5b371e220dfae3d0605367bc3b8f';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An array of user `login`s that will be requested.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C91Da5B371E220Dfae3D0605367Bc3B8F\Reviewers>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C91Da5B371E220Dfae3D0605367Bc3B8F\Reviewers::class)
     */
    private array $reviewers = array();
    /**
     * An array of team `slug`s that will be requested.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C91Da5B371E220Dfae3D0605367Bc3B8F\TeamReviewers>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C91Da5B371E220Dfae3D0605367Bc3B8F\TeamReviewers::class)
     */
    private array $team_reviewers = array();
    /**
     * An array of user `login`s that will be requested.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C91Da5B371E220Dfae3D0605367Bc3B8F\Reviewers>
     */
    public function reviewers() : array
    {
        return $this->reviewers;
    }
    /**
     * An array of team `slug`s that will be requested.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C91Da5B371E220Dfae3D0605367Bc3B8F\TeamReviewers>
     */
    public function team_reviewers() : array
    {
        return $this->team_reviewers;
    }
}
