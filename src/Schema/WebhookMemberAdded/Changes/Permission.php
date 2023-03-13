<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookMemberAdded\Changes;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Permission
{
    public const SCHEMA_JSON = '{"required":["to"],"type":"object","properties":{"to":{"enum":["write","admin","read"],"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"to":"generated_to"}';
    public function __construct(public string $to)
    {
    }
}
