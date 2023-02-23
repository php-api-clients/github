<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited\Changes;

final readonly class LinearHistoryRequirementEnforcementLevel
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $from;
    public function __construct(string $from)
    {
        $this->from = $from;
    }
}
