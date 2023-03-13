<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operation\Search\Topics\Response\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","incomplete_results","items"],"type":"object","properties":{"total_count":{"type":"integer"},"incomplete_results":{"type":"boolean"},"items":{"type":"array","items":{"title":"Topic Search Result Item","required":["name","display_name","short_description","description","created_by","released","created_at","updated_at","featured","curated","score"],"type":"object","properties":{"name":{"type":"string"},"display_name":{"type":["string","null"]},"short_description":{"type":["string","null"]},"description":{"type":["string","null"]},"created_by":{"type":["string","null"]},"released":{"type":["string","null"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"featured":{"type":"boolean"},"curated":{"type":"boolean"},"score":{"type":"number"},"repository_count":{"type":["integer","null"]},"logo_url":{"type":["string","null"],"format":"uri"},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}},"related":{"type":["array","null"],"items":{"type":"object","properties":{"topic_relation":{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}}}},"aliases":{"type":["array","null"],"items":{"type":"object","properties":{"topic_relation":{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}}}}},"description":"Topic Search Result Item"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"incomplete_results":false,"items":[{"name":"generated_name","display_name":"generated_display_name","short_description":"generated_short_description","description":"generated_description","created_by":"generated_created_by","released":"generated_released","created_at":"generated_created_at","updated_at":"generated_updated_at","featured":false,"curated":false,"score":13,"repository_count":13,"logo_url":"generated_logo_url","text_matches":[{"object_url":"generated_object_url","object_type":"generated_object_type","property":"generated_property","fragment":"generated_fragment","matches":[{"text":"generated_text","indices":[13]}]}],"related":[{"topic_relation":{"id":13,"name":"generated_name","topic_id":13,"relation_type":"generated_relation_type"}}],"aliases":[{"topic_relation":{"id":13,"name":"generated_name","topic_id":13,"relation_type":"generated_relation_type"}}]}]}';
    /**
     * @param array<\ApiClients\Client\GitHub\Schema\TopicSearchResultItem> $items
     */
    public function __construct(public int $total_count, public bool $incomplete_results, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\TopicSearchResultItem::class)] public array $items)
    {
    }
}
