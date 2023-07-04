<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Pulls\RemoveRequestedReviewers\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["reviewers"],"type":"object","properties":{"reviewers":{"type":"array","items":{"type":"string"},"description":"An array of user `login`s that will be removed."},"team_reviewers":{"type":"array","items":{"type":"string"},"description":"An array of team `slug`s that will be removed."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"reviewers":["generated","generated"],"team_reviewers":["generated","generated"]}';

    /**
     * reviewers: An array of user `login`s that will be removed.
     * teamReviewers: An array of team `slug`s that will be removed.
     */
    public function __construct(public array $reviewers, #[MapFrom('team_reviewers')]
    public array|null $teamReviewers,)
    {
    }
}
