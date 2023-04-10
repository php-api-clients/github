<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Orgs\UpdatePatAccesses\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["action","pat_ids"],"type":"object","properties":{"action":{"enum":["revoke"],"type":"string","description":"Action to apply to the fine-grained personal access token."},"pat_ids":{"maxItems":100,"minItems":1,"type":"array","items":{"type":"integer","description":"Unique identifier of the fine-grained personal access token."},"description":"The IDs of the fine-grained personal access tokens."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"action":"revoke","pat_ids":[13]}';
    /**
     * action: Action to apply to the fine-grained personal access token.
     * patIds: The IDs of the fine-grained personal access tokens.
     * @param array<int> $patIds
     */
    public function __construct(public string $action, #[\EventSauce\ObjectHydrator\MapFrom('pat_ids')] public array $patIds)
    {
    }
}
