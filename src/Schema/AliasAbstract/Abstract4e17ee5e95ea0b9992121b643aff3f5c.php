<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstract4e17ee5e95ea0b9992121b643aff3f5c
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name_null","topic_id":13,"relation_type":"generated_relation_type_null"}';
    public function __construct(public ?int $id, public ?string $name, #[\EventSauce\ObjectHydrator\MapFrom('topic_id')] public ?int $topicId, #[\EventSauce\ObjectHydrator\MapFrom('relation_type')] public ?string $relationType)
    {
    }
}
