<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class LabelSearchResultItem
{
    public const SCHEMA_JSON = '{"title":"Label Search Result Item","required":["id","node_id","url","name","color","default","description","score"],"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string","format":"uri"},"name":{"type":"string"},"color":{"type":"string"},"default":{"type":"boolean"},"description":{"type":["string","null"]},"score":{"type":"number"},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}}},"description":"Label Search Result Item"}';
    public const SCHEMA_TITLE = 'Label Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Label Search Result Item';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"node_id":"generated_node_id","url":"generated_url","name":"generated_name","color":"generated_color","default":false,"description":"generated_description","score":13,"text_matches":[{"object_url":"generated_object_url","object_type":"generated_object_type","property":"generated_property","fragment":"generated_fragment","matches":[{"text":"generated_text","indices":[13]}]}]}';
    /**
     * @param array<\ApiClients\Client\GitHub\Schema\SearchResultTextMatches> $text_matches
     */
    public function __construct(public ?int $id, public ?string $node_id, public ?string $url, public ?string $name, public ?string $color, public ?bool $default, public ?string $description, public ?int $score, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\SearchResultTextMatches::class)] public array $text_matches)
    {
    }
}
