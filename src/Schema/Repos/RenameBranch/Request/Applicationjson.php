<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\RenameBranch\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["new_name"],"type":"object","properties":{"new_name":{"type":"string","description":"The new name of the branch."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"newName":"generated_new_name_null"}';
    /**
     * newName: The new name of the branch.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('new_name')] public string $newName)
    {
    }
}
