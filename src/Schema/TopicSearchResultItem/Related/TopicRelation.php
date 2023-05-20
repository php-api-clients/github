<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class TopicRelation
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":2,"name":"generated","topic_id":8,"relation_type":"generated"}';

    public function __construct(public ?int $id, public ?string $name, #[MapFrom('topic_id')] public ?int $topicId, #[MapFrom('relation_type')] public ?string $relationType)
    {
    }
}
