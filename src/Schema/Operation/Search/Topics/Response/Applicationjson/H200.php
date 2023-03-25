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
    public const SCHEMA_EXAMPLE_DATA = '{"totalCount":13,"incompleteResults":false,"items":[{"name":"generated_name_null","displayName":"generated_display_name_null","shortDescription":"generated_short_description_null","description":"generated_description_null","createdBy":"generated_created_by_null","released":"generated_released_null","createdAt":"1970-01-01T00:00:00+00:00","updatedAt":"1970-01-01T00:00:00+00:00","featured":false,"curated":false,"score":13,"repositoryCount":13,"logoUrl":"https:\\/\\/example.com\\/","textMatches":[{"objectUrl":"generated_object_url_null","objectType":"generated_object_type_null","property":"generated_property_null","fragment":"generated_fragment_null","matches":[{"text":"generated_text_null","indices":[13]}]}],"related":[{"topicRelation":{"id":13,"name":"generated_name_null","topicId":13,"relationType":"generated_relation_type_null"}}],"aliases":[{"topicRelation":{"id":13,"name":"generated_name_null","topicId":13,"relationType":"generated_relation_type_null"}}]}]}';
    /**
     * @param array<\ApiClients\Client\GitHub\Schema\TopicSearchResultItem> $items
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_count')] public int $totalCount, #[\EventSauce\ObjectHydrator\MapFrom('incomplete_results')] public bool $incompleteResults, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\TopicSearchResultItem::class)] public array $items)
    {
    }
}
