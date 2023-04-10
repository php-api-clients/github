<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookMemberAdded;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"permission":{"required":["to"],"type":"object","properties":{"to":{"enum":["write","admin","read"],"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"permission":{"to":"write"}}';
    public function __construct(public ?Schema\WebhookMemberAdded\Changes\Permission $permission)
    {
    }
}
