<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes;

final readonly class LinearHistoryRequirementEnforcementLevel
{
    public const SCHEMA_JSON         = '{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"everyone"}';

    public function __construct(public string $from)
    {
    }
}
