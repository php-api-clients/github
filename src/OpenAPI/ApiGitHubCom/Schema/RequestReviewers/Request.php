<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequestReviewers;

final class Request
{
    public const SCHEMA_JSON = '{"type":"object","anyOf":[{"required":["reviewers"]},{"required":["team_reviewers"]}],"properties":{"reviewers":{"type":"array","items":{"type":"string"},"description":"An array of user `login`s that will be requested."},"team_reviewers":{"type":"array","items":{"type":"string"},"description":"An array of team `slug`s that will be requested."}}}';
    public const SCHEMA_TITLE = 'RequestReviewers\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An array of user `login`s that will be requested.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Reviewers>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Reviewers::class)
     */
    private array $reviewers = array();
    /**
     * An array of team `slug`s that will be requested.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\TeamReviewers>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\TeamReviewers::class)
     */
    private array $team_reviewers = array();
    /**
     * An array of user `login`s that will be requested.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Reviewers>
     */
    public function reviewers() : array
    {
        return $this->reviewers;
    }
    /**
     * An array of team `slug`s that will be requested.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\TeamReviewers>
     */
    public function team_reviewers() : array
    {
        return $this->team_reviewers;
    }
}
