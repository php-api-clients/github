<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\RenameBranch\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Applicationjson
{
    public const SCHEMA_JSON         = '{"required":["new_name"],"type":"object","properties":{"new_name":{"type":"string","description":"The new name of the branch."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"new_name":"generated_new_name_null"}';

    /**
     * newName: The new name of the branch.
     */
    public function __construct(#[MapFrom('new_name')] public string $newName)
    {
    }
}
