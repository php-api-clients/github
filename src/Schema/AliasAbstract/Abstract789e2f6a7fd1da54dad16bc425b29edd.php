<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstract789e2f6a7fd1da54dad16bc425b29edd
{
    public const SCHEMA_JSON         = '{"required":["id","repository_id","emoji","name","description","created_at","updated_at","slug","is_answerable"],"type":"object","properties":{"created_at":{"type":"string","format":"date-time"},"description":{"type":"string"},"emoji":{"type":"string"},"id":{"type":"integer"},"is_answerable":{"type":"boolean"},"name":{"type":"string"},"node_id":{"type":"string"},"repository_id":{"type":"integer"},"slug":{"type":"string"},"updated_at":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"created_at":"1970-01-01T00:00:00+00:00","description":"generated_description_null","emoji":"generated_emoji_null","id":13,"is_answerable":false,"name":"generated_name_null","node_id":"generated_node_id_null","repository_id":13,"slug":"generated_slug_null","updated_at":"generated_updated_at_null"}';

    public function __construct(#[MapFrom('created_at')] public string $createdAt, public string $description, public string $emoji, public int $id, #[MapFrom('is_answerable')] public bool $isAnswerable, public string $name, #[MapFrom('node_id')] public ?string $nodeId, #[MapFrom('repository_id')] public int $repositoryId, public string $slug, #[MapFrom('updated_at')] public string $updatedAt)
    {
    }
}
