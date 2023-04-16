<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\RunnerLabel;
use EventSauce\ObjectHydrator\MapFrom;
use EventSauce\ObjectHydrator\PropertyCasters\CastListToType;

abstract readonly class Abstract465ffe2283692c35b7e35cd3f31b8c6b
{
    public const SCHEMA_JSON         = '{"required":["total_count","labels"],"type":"object","properties":{"total_count":{"type":"integer"},"labels":{"type":"array","items":{"title":"Self hosted runner label","required":["name"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the label."},"name":{"type":"string","description":"Name of the label."},"type":{"enum":["read-only","custom"],"type":"string","description":"The type of label. Read-only labels are applied automatically when the runner is configured."}},"description":"A label for a self hosted runner"}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"labels":[{"id":13,"name":"generated_name_null","type":"read-only"}]}';

    /**
     * @param array<RunnerLabel> $labels
     */
    public function __construct(#[MapFrom('total_count')] public int $totalCount, #[CastListToType(Schema\RunnerLabel::class)] public array $labels)
    {
    }
}
