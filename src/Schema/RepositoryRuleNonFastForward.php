<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRuleNonFastForward
{
    public const SCHEMA_JSON         = '{"title":"non_fast_forward","required":["type"],"type":"object","properties":{"type":{"enum":["non_fast_forward"],"type":"string"},"ruleset_source_type":{"enum":["Repository","Organization"],"type":"string","description":"The type of source of the ruleset that this rule is configured in"},"ruleset_source":{"type":"string","description":"The name of the source of the ruleset that this rule is configured in"},"ruleset_id":{"type":"integer","description":"The ID of the ruleset that this rule is configured in"}},"description":"Prevent users with push access from force pushing to branches."}';
    public const SCHEMA_TITLE        = 'non_fast_forward';
    public const SCHEMA_DESCRIPTION  = 'Prevent users with push access from force pushing to branches.';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"non_fast_forward","ruleset_source_type":"Repository","ruleset_source":"generated","ruleset_id":10}';

    /**
     * rulesetSourceType: The type of source of the ruleset that this rule is configured in
     * rulesetSource: The name of the source of the ruleset that this rule is configured in
     * rulesetId: The ID of the ruleset that this rule is configured in
     */
    public function __construct(public string $type, #[MapFrom('ruleset_source_type')]
    public string|null $rulesetSourceType, #[MapFrom('ruleset_source')]
    public string|null $rulesetSource, #[MapFrom('ruleset_id')]
    public int|null $rulesetId,)
    {
    }
}
