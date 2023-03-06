<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class SearchResultTextMatches
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"object_url":"generated_object_url","object_type":"generated_object_type","property":"generated_property","fragment":"generated_fragment","matches":[{"text":"generated_text","indices":[13]}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHub\Schema\SearchResultTextMatches\Matches> $matches
     */
    public function __construct(public ?string $object_url, public ?string $object_type, public ?string $property, public ?string $fragment, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\SearchResultTextMatches\Matches::class)] public ?array $matches)
    {
    }
}
