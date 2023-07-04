<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRulesetConditionsRepositoryIdTarget
{
    public const SCHEMA_JSON         = '{"title":"Repository ruleset conditions for repository IDs","required":["repository_id"],"type":"object","properties":{"repository_id":{"type":"object","properties":{"repository_ids":{"type":"array","items":{"type":"integer"},"description":"The repository IDs that the ruleset applies to. One of these IDs must match for the condition to pass."}}}},"description":"Parameters for a repository ID condition"}';
    public const SCHEMA_TITLE        = 'Repository ruleset conditions for repository IDs';
    public const SCHEMA_DESCRIPTION  = 'Parameters for a repository ID condition';
    public const SCHEMA_EXAMPLE_DATA = '{"repository_id":{"repository_ids":[15,16]}}';

    public function __construct(#[MapFrom('repository_id')]
    public Schema\RepositoryRulesetConditionsRepositoryIdTarget\RepositoryId $repositoryId,)
    {
    }
}
