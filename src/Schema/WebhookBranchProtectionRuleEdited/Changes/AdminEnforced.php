<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes;

final readonly class AdminEnforced
{
    public const SCHEMA_JSON         = '{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":false}';

    public function __construct(public ?bool $from)
    {
    }
}
