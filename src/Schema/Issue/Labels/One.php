<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Issue\Labels;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class One
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"id":{"type":"integer","format":"int64"},"node_id":{"type":"string"},"url":{"type":"string","format":"uri"},"name":{"type":"string"},"description":{"type":["string","null"]},"color":{"type":["string","null"]},"default":{"type":"boolean"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":2,"node_id":"generated","url":"https:\\/\\/example.com\\/","name":"generated","description":"generated","color":"generated","default":false}';

    public function __construct(public ?int $id, #[MapFrom('node_id')] public ?string $nodeId, public ?string $url, public ?string $name, public ?string $description, public ?string $color, public ?bool $default)
    {
    }
}
