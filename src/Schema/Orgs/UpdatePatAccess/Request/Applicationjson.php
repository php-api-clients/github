<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Orgs\UpdatePatAccess\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
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
