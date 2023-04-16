<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class LabelSearchResultItem
{
    public const SCHEMA_JSON = '{"title":"Label Search Result Item","required":["id","node_id","url","name","color","default","description","score"],"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string","format":"uri"},"name":{"type":"string"},"color":{"type":"string"},"default":{"type":"boolean"},"description":{"type":["string","null"]},"score":{"type":"number"},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}}},"description":"Label Search Result Item"}';
    public const SCHEMA_TITLE = 'Label Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Label Search Result Item';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"node_id":"generated_node_id_null","url":"https:\\/\\/example.com\\/","name":"generated_name_null","color":"generated_color_null","default":false,"description":"generated_description_null","score":13.13,"text_matches":[{"object_url":"generated_object_url_null","object_type":"generated_object_type_null","property":"generated_property_null","fragment":"generated_fragment_null","matches":[{"text":"generated_text_null","indices":[13]}]}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHub\Schema\SearchResultTextMatches> $textMatches
     */
    public function __construct(public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $url, public string $name, public string $color, public bool $default, public ?string $description, public int|float $score, #[\EventSauce\ObjectHydrator\MapFrom('text_matches')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\SearchResultTextMatches::class)] public ?array $textMatches)
    {
    }
}
