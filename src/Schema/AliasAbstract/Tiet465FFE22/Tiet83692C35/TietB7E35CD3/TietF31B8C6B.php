<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet465FFE22\Tiet83692C35\TietB7E35CD3;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietF31B8C6B
{
    public const SCHEMA_JSON         = '{"required":["total_count","labels"],"type":"object","properties":{"total_count":{"type":"integer"},"labels":{"type":"array","items":{"title":"Self hosted runner label","required":["name"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the label."},"name":{"type":"string","description":"Name of the label."},"type":{"enum":["read-only","custom"],"type":"string","description":"The type of label. Read-only labels are applied automatically when the runner is configured."}},"description":"A label for a self hosted runner"}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":11,"labels":[{"id":2,"name":"generated","type":"custom"},{"id":2,"name":"generated","type":"custom"}]}';

    public function __construct(#[MapFrom('total_count')] public int $totalCount, public array $labels)
    {
    }
}
