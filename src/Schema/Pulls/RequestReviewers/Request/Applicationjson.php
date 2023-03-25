<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Pulls\RequestReviewers\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","anyOf":[{"required":["reviewers"]},{"required":["team_reviewers"]}],"properties":{"reviewers":{"type":"array","items":{"type":"string"},"description":"An array of user `login`s that will be requested."},"team_reviewers":{"type":"array","items":{"type":"string"},"description":"An array of team `slug`s that will be requested."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"reviewers":["generated_reviewers_null"],"teamReviewers":["generated_team_reviewers_null"]}';
    /**
     * reviewers: An array of user `login`s that will be requested.
     * @param ?array<string> $reviewers
     * teamReviewers: An array of team `slug`s that will be requested.
     * @param ?array<string> $teamReviewers
     */
    public function __construct(public ?array $reviewers, #[\EventSauce\ObjectHydrator\MapFrom('team_reviewers')] public ?array $teamReviewers)
    {
    }
}
