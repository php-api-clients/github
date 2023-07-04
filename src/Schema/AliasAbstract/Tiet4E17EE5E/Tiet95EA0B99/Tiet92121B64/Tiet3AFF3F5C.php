<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet4E17EE5E\Tiet95EA0B99\Tiet92121B64;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet3AFF3F5C
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":2,"name":"generated","topic_id":8,"relation_type":"generated"}';

    public function __construct(public int|null $id, public string|null $name, #[MapFrom('topic_id')]
    public int|null $topicId, #[MapFrom('relation_type')]
    public string|null $relationType,)
    {
    }
}
