<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class RequiredStatusChecksEnforcementLevel
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"off"}';
    public function __construct(public string $from)
    {
    }
}
