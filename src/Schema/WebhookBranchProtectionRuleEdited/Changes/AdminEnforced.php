<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited\Changes;

final readonly class AdminEnforced
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?bool $from;
    public function __construct(bool $from)
    {
        $this->from = $from;
    }
}
