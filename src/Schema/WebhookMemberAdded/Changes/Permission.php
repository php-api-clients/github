<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookMemberAdded\Changes;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Permission
{
    public const SCHEMA_JSON = '{"required":["to"],"type":"object","properties":{"to":{"enum":["write","admin","read"],"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"to":"write"}';
    public function __construct(public string $to)
    {
    }
}
