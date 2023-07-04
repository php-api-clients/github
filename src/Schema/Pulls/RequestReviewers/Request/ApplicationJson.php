<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Pulls\RequestReviewers\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":"object","anyOf":[{"required":["reviewers"]},{"required":["team_reviewers"]}],"properties":{"reviewers":{"type":"array","items":{"type":"string"},"description":"An array of user `login`s that will be requested."},"team_reviewers":{"type":"array","items":{"type":"string"},"description":"An array of team `slug`s that will be requested."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"reviewers":["generated","generated"],"team_reviewers":["generated","generated"]}';

    /**
     * reviewers: An array of user `login`s that will be requested.
     * teamReviewers: An array of team `slug`s that will be requested.
     */
    public function __construct(public array|null $reviewers, #[MapFrom('team_reviewers')]
    public array|null $teamReviewers,)
    {
    }
}
