<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Discussion;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Category
{
    public const SCHEMA_JSON = '{"required":["id","repository_id","emoji","name","description","created_at","updated_at","slug","is_answerable"],"type":"object","properties":{"created_at":{"type":"string","format":"date-time"},"description":{"type":"string"},"emoji":{"type":"string"},"id":{"type":"integer"},"is_answerable":{"type":"boolean"},"name":{"type":"string"},"node_id":{"type":"string"},"repository_id":{"type":"integer"},"slug":{"type":"string"},"updated_at":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"createdAt":"1970-01-01T00:00:00+00:00","description":"generated_description_null","emoji":"generated_emoji_null","id":13,"isAnswerable":false,"name":"generated_name_null","nodeId":"generated_node_id_null","repositoryId":13,"slug":"generated_slug_null","updatedAt":"generated_updated_at_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, public string $description, public string $emoji, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('is_answerable')] public bool $isAnswerable, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('repository_id')] public int $repositoryId, public string $slug, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt)
    {
    }
}
