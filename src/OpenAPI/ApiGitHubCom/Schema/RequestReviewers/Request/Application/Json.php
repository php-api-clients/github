<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequestReviewers\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","anyOf":[{"required":["reviewers"]},{"required":["team_reviewers"]}],"properties":{"reviewers":{"type":"array","items":{"type":"string"},"description":"An array of user `login`s that will be requested."},"team_reviewers":{"type":"array","items":{"type":"string"},"description":"An array of team `slug`s that will be requested."}}}';
    public const SCHEMA_TITLE = 'RequestReviewers\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An array of user `login`s that will be requested.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Reviewers>
     */
    public readonly array $reviewers;
    /**
     * An array of team `slug`s that will be requested.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\TeamReviewers>
     */
    public readonly array $team_reviewers;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Reviewers> $reviewers
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\TeamReviewers> $team_reviewers
     */
    public function __construct(array $reviewers, array $team_reviewers)
    {
        $this->reviewers = $reviewers;
        $this->team_reviewers = $team_reviewers;
    }
}
