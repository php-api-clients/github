<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"condition_type":{"type":"object","properties":{"from":{"type":"string"}}},"target":{"type":"object","properties":{"from":{"type":"string"}}},"include":{"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}},"exclude":{"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"condition_type":{"from":"generated"},"target":{"from":"generated"},"include":{"from":["generated","generated"]},"exclude":{"from":["generated","generated"]}}';

    public function __construct(#[MapFrom('condition_type')]
    public Schema\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated\Changes\ConditionType|null $conditionType, public Schema\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated\Changes\Target|null $target, public Schema\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated\Changes\Include_|null $include, public Schema\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated\Changes\Exclude|null $exclude,)
    {
    }
}
