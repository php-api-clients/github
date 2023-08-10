<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"configuration":{"type":"object","properties":{"from":{"type":"string"}}},"rule_type":{"type":"object","properties":{"from":{"type":"string"}}},"pattern":{"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"configuration":{"from":"generated"},"rule_type":{"from":"generated"},"pattern":{"from":"generated"}}';

    public function __construct(public Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated\Changes\Configuration|null $configuration, #[MapFrom('rule_type')]
    public Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated\Changes\RuleType|null $ruleType, public Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated\Changes\Pattern|null $pattern,)
    {
    }
}
