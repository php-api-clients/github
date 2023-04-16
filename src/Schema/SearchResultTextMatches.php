<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\SearchResultTextMatches\Matches;
use EventSauce\ObjectHydrator\MapFrom;
use EventSauce\ObjectHydrator\PropertyCasters\CastListToType;

final readonly class SearchResultTextMatches
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"object_url":"generated_object_url_null","object_type":"generated_object_type_null","property":"generated_property_null","fragment":"generated_fragment_null","matches":[{"text":"generated_text_null","indices":[13]}]}';

    /**
     * @param ?array<Matches> $matches
     */
    public function __construct(#[MapFrom('object_url')] public ?string $objectUrl, #[MapFrom('object_type')] public ?string $objectType, public ?string $property, public ?string $fragment, #[CastListToType(Schema\SearchResultTextMatches\Matches::class)] public ?array $matches)
    {
    }
}
