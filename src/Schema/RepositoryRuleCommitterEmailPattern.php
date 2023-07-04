<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRuleCommitterEmailPattern
{
    public const SCHEMA_JSON         = '{"title":"committer_email_pattern","required":["type"],"type":"object","properties":{"type":{"enum":["committer_email_pattern"],"type":"string"},"ruleset_source_type":{"enum":["Repository","Organization"],"type":"string","description":"The type of source of the ruleset that this rule is configured in"},"ruleset_source":{"type":"string","description":"The name of the source of the ruleset that this rule is configured in"},"ruleset_id":{"type":"integer","description":"The ID of the ruleset that this rule is configured in"},"parameters":{"required":["operator","pattern"],"type":"object","properties":{"name":{"type":"string","description":"How this rule will appear to users."},"negate":{"type":"boolean","description":"If true, the rule will fail if the pattern matches."},"operator":{"enum":["starts_with","ends_with","contains","regex"],"type":"string","description":"The operator to use for matching."},"pattern":{"type":"string","description":"The pattern to match with."}}}},"description":"Parameters to be used for the committer_email_pattern rule"}';
    public const SCHEMA_TITLE        = 'committer_email_pattern';
    public const SCHEMA_DESCRIPTION  = 'Parameters to be used for the committer_email_pattern rule';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"committer_email_pattern","ruleset_source_type":"Repository","ruleset_source":"generated","ruleset_id":10,"parameters":{"name":"generated","negate":false,"operator":"regex","pattern":"generated"}}';

    /**
     * rulesetSourceType: The type of source of the ruleset that this rule is configured in
     * rulesetSource: The name of the source of the ruleset that this rule is configured in
     * rulesetId: The ID of the ruleset that this rule is configured in
     */
    public function __construct(public string $type, #[MapFrom('ruleset_source_type')]
    public string|null $rulesetSourceType, #[MapFrom('ruleset_source')]
    public string|null $rulesetSource, #[MapFrom('ruleset_id')]
    public int|null $rulesetId, public Schema\RepositoryRuleCommitterEmailPattern\Parameters|null $parameters,)
    {
    }
}
