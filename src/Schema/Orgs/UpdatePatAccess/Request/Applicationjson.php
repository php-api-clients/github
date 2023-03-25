<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Orgs\UpdatePatAccess\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["action"],"type":"object","properties":{"action":{"enum":["revoke"],"type":"string","description":"Action to apply to the fine-grained personal access token."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"action":"revoke"}';
    /**
     * action: Action to apply to the fine-grained personal access token.
     */
    public function __construct(public string $action)
    {
    }
}
