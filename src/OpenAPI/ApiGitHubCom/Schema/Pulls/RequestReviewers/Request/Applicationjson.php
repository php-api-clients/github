<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Pulls\RequestReviewers\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"type":"object","anyOf":[{"required":["reviewers"]},{"required":["team_reviewers"]}],"properties":{"reviewers":{"type":"array","items":{"type":"string"},"description":"An array of user `login`s that will be requested."},"team_reviewers":{"type":"array","items":{"type":"string"},"description":"An array of team `slug`s that will be requested."}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An array of user `login`s that will be requested.
     */
    public ?array $reviewers;
    /**
     * An array of team `slug`s that will be requested.
     */
    public ?array $team_reviewers;

    public function __construct(array $reviewers, array $team_reviewers)
    {
        $this->reviewers      = $reviewers;
        $this->team_reviewers = $team_reviewers;
    }
}
