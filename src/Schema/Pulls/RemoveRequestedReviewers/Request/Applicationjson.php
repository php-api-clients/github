<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Pulls\RemoveRequestedReviewers\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["reviewers"],"type":"object","properties":{"reviewers":{"type":"array","items":{"type":"string"},"description":"An array of user `login`s that will be removed."},"team_reviewers":{"type":"array","items":{"type":"string"},"description":"An array of team `slug`s that will be removed."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"reviewers":["generated_reviewers_null"],"team_reviewers":["generated_team_reviewers_null"]}';
    /**
     * reviewers: An array of user `login`s that will be removed.
     * @param array<string> $reviewers
     * teamReviewers: An array of team `slug`s that will be removed.
     * @param ?array<string> $teamReviewers
     */
    public function __construct(public array $reviewers, #[\EventSauce\ObjectHydrator\MapFrom('team_reviewers')] public ?array $teamReviewers)
    {
    }
}
