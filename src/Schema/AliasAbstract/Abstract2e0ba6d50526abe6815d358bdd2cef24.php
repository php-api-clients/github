<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstract2e0ba6d50526abe6815d358bdd2cef24
{
    public const SCHEMA_JSON         = '{"required":["id","node_id","name","full_name","private"],"type":"object","properties":{"full_name":{"type":"string"},"id":{"type":"integer","description":"Unique identifier of the repository"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"private":{"type":"boolean","description":"Whether the repository is private or public."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"full_name":"generated_full_name_null","id":13,"name":"generated_name_null","node_id":"generated_node_id_null","private":false}';

    /**
     * id: Unique identifier of the repository
     * name: The name of the repository.
     * private: Whether the repository is private or public.
     */
    public function __construct(#[MapFrom('full_name')] public string $fullName, public int $id, public string $name, #[MapFrom('node_id')] public string $nodeId, public bool $private)
    {
    }
}
