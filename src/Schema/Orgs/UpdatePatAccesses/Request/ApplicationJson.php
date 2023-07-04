<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Orgs\UpdatePatAccesses\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["action","pat_ids"],"type":"object","properties":{"action":{"enum":["revoke"],"type":"string","description":"Action to apply to the fine-grained personal access token."},"pat_ids":{"maxItems":100,"minItems":1,"type":"array","items":{"type":"integer","description":"Unique identifier of the fine-grained personal access token."},"description":"The IDs of the fine-grained personal access tokens."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"action":"revoke","pat_ids":[8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107]}';

    /**
     * action: Action to apply to the fine-grained personal access token.
     * patIds: The IDs of the fine-grained personal access tokens.
     */
    public function __construct(public string $action, #[MapFrom('pat_ids')]
    public array $patIds,)
    {
    }
}
