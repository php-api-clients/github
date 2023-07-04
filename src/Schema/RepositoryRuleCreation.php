<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRuleCreation
{
    public const SCHEMA_JSON         = '{"title":"creation","required":["type"],"type":"object","properties":{"type":{"enum":["creation"],"type":"string"},"ruleset_source_type":{"enum":["Repository","Organization"],"type":"string","description":"The type of source of the ruleset that this rule is configured in"},"ruleset_source":{"type":"string","description":"The name of the source of the ruleset that this rule is configured in"},"ruleset_id":{"type":"integer","description":"The ID of the ruleset that this rule is configured in"}},"description":"Only allow users with bypass permission to create matching refs."}';
    public const SCHEMA_TITLE        = 'creation';
    public const SCHEMA_DESCRIPTION  = 'Only allow users with bypass permission to create matching refs.';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"creation","ruleset_source_type":"Repository","ruleset_source":"generated","ruleset_id":10}';

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
