<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\IssueSearchResultItem;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Labels
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"id":{"type":"integer","format":"int64"},"node_id":{"type":"string"},"url":{"type":"string"},"name":{"type":"string"},"color":{"type":"string"},"default":{"type":"boolean"},"description":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":2,"node_id":"generated","url":"generated","name":"generated","color":"generated","default":false,"description":"generated"}';

    public function __construct(public ?int $id, #[MapFrom('node_id')] public ?string $nodeId, public ?string $url, public ?string $name, public ?string $color, public ?bool $default, public ?string $description)
    {
    }
}
