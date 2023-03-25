<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Repositories
{
    public const SCHEMA_JSON = '{"required":["id","node_id","name","full_name","private"],"type":"object","properties":{"full_name":{"type":"string"},"id":{"type":"integer","description":"Unique identifier of the repository"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"private":{"type":"boolean","description":"Whether the repository is private or public."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"fullName":"generated_full_name_null","id":13,"name":"generated_name_null","nodeId":"generated_node_id_null","private":false}';
    /**
     * id: Unique identifier of the repository
     * name: The name of the repository.
     * private: Whether the repository is private or public.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('full_name')] public string $fullName, public int $id, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public bool $private)
    {
    }
}
