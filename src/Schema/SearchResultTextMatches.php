<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SearchResultTextMatches
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"object_url":"generated","object_type":"generated","property":"generated","fragment":"generated","matches":[{"text":"generated","indices":[8,9]},{"text":"generated","indices":[8,9]}]}';

    public function __construct(#[MapFrom('object_url')]
    public string|null $objectUrl, #[MapFrom('object_type')]
    public string|null $objectType, public string|null $property, public string|null $fragment, public array|null $matches,)
    {
    }
}
