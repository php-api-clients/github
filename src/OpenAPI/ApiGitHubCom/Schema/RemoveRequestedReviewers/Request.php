<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RemoveRequestedReviewers;

final class Request
{
    public const SCHEMA_JSON = '{"required":["reviewers"],"type":"object","properties":{"reviewers":{"type":"array","items":{"type":"string"},"description":"An array of user `login`s that will be removed."},"team_reviewers":{"type":"array","items":{"type":"string"},"description":"An array of team `slug`s that will be removed."}}}';
    public const SCHEMA_TITLE = 'RemoveRequestedReviewers\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An array of user `login`s that will be removed.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Reviewers>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Reviewers::class)
     */
    private array $reviewers = array();
    /**
     * An array of team `slug`s that will be removed.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\TeamReviewers>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\TeamReviewers::class)
     */
    private array $team_reviewers = array();
    /**
     * An array of user `login`s that will be removed.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Reviewers>
     */
    public function reviewers() : array
    {
        return $this->reviewers;
    }
    /**
     * An array of team `slug`s that will be removed.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\TeamReviewers>
     */
    public function team_reviewers() : array
    {
        return $this->team_reviewers;
    }
}
