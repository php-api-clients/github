<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Orgs\UpdatePatAccesses\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Applicationjson
{
    public const SCHEMA_JSON         = '{"required":["action","pat_ids"],"type":"object","properties":{"action":{"enum":["revoke"],"type":"string","description":"Action to apply to the fine-grained personal access token."},"pat_ids":{"maxItems":100,"minItems":1,"type":"array","items":{"type":"integer","description":"Unique identifier of the fine-grained personal access token."},"description":"The IDs of the fine-grained personal access tokens."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"action":"revoke","pat_ids":[13]}';

    /**
     * action: Action to apply to the fine-grained personal access token.
     * patIds: The IDs of the fine-grained personal access tokens.
     *
     * @param array<int> $patIds
     */
    public function __construct(public string $action, #[MapFrom('pat_ids')] public array $patIds)
    {
    }
}
