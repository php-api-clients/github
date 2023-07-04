<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRuleUpdate
{
    public const SCHEMA_JSON         = '{"title":"update","required":["type"],"type":"object","properties":{"type":{"enum":["update"],"type":"string"},"ruleset_source_type":{"enum":["Repository","Organization"],"type":"string","description":"The type of source of the ruleset that this rule is configured in"},"ruleset_source":{"type":"string","description":"The name of the source of the ruleset that this rule is configured in"},"ruleset_id":{"type":"integer","description":"The ID of the ruleset that this rule is configured in"},"parameters":{"required":["update_allows_fetch_and_merge"],"type":"object","properties":{"update_allows_fetch_and_merge":{"type":"boolean","description":"Branch can pull changes from its upstream repository"}}}},"description":"Only allow users with bypass permission to update matching refs."}';
    public const SCHEMA_TITLE        = 'update';
    public const SCHEMA_DESCRIPTION  = 'Only allow users with bypass permission to update matching refs.';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"update","ruleset_source_type":"Repository","ruleset_source":"generated","ruleset_id":10,"parameters":{"update_allows_fetch_and_merge":false}}';

    /**
     * rulesetSourceType: The type of source of the ruleset that this rule is configured in
     * rulesetSource: The name of the source of the ruleset that this rule is configured in
     * rulesetId: The ID of the ruleset that this rule is configured in
     */
    public function __construct(public string $type, #[MapFrom('ruleset_source_type')]
    public string|null $rulesetSourceType, #[MapFrom('ruleset_source')]
    public string|null $rulesetSource, #[MapFrom('ruleset_id')]
    public int|null $rulesetId, public Schema\RepositoryRuleUpdate\Parameters|null $parameters,)
    {
    }
}
