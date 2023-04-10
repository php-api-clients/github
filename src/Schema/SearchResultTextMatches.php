<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class SearchResultTextMatches
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"object_url":"generated_object_url_null","object_type":"generated_object_type_null","property":"generated_property_null","fragment":"generated_fragment_null","matches":[{"text":"generated_text_null","indices":[13]}]}';
    /**
     * @param ?array<\ApiClients\Client\Github\Schema\SearchResultTextMatches\Matches> $matches
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('object_url')] public ?string $objectUrl, #[\EventSauce\ObjectHydrator\MapFrom('object_type')] public ?string $objectType, public ?string $property, public ?string $fragment, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\SearchResultTextMatches\Matches::class)] public ?array $matches)
    {
    }
}
