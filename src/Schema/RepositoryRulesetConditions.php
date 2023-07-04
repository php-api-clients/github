<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRulesetConditions
{
    public const SCHEMA_JSON         = '{"title":"Repository ruleset conditions for ref names","type":"object","properties":{"ref_name":{"type":"object","properties":{"include":{"type":"array","items":{"type":"string"},"description":"Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."},"exclude":{"type":"array","items":{"type":"string"},"description":"Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."}}}},"description":"Parameters for a repository ruleset ref name condition"}';
    public const SCHEMA_TITLE        = 'Repository ruleset conditions for ref names';
    public const SCHEMA_DESCRIPTION  = 'Parameters for a repository ruleset ref name condition';
    public const SCHEMA_EXAMPLE_DATA = '{"ref_name":{"include":["generated","generated"],"exclude":["generated","generated"]}}';

    public function __construct(#[MapFrom('ref_name')]
    public Schema\RepositoryRulesetConditions\RefName|null $refName,)
    {
    }
}
