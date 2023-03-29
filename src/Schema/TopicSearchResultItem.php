<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class TopicSearchResultItem
{
    public const SCHEMA_JSON = '{"title":"Topic Search Result Item","required":["name","display_name","short_description","description","created_by","released","created_at","updated_at","featured","curated","score"],"type":"object","properties":{"name":{"type":"string"},"display_name":{"type":["string","null"]},"short_description":{"type":["string","null"]},"description":{"type":["string","null"]},"created_by":{"type":["string","null"]},"released":{"type":["string","null"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"featured":{"type":"boolean"},"curated":{"type":"boolean"},"score":{"type":"number"},"repository_count":{"type":["integer","null"]},"logo_url":{"type":["string","null"],"format":"uri"},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}},"related":{"type":["array","null"],"items":{"type":"object","properties":{"topic_relation":{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}}}},"aliases":{"type":["array","null"],"items":{"type":"object","properties":{"topic_relation":{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}}}}},"description":"Topic Search Result Item"}';
    public const SCHEMA_TITLE = 'Topic Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Topic Search Result Item';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","display_name":"generated_display_name_null","short_description":"generated_short_description_null","description":"generated_description_null","created_by":"generated_created_by_null","released":"generated_released_null","created_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00","featured":false,"curated":false,"score":13,"repository_count":13,"logo_url":"https:\\/\\/example.com\\/","text_matches":[{"object_url":"generated_object_url_null","object_type":"generated_object_type_null","property":"generated_property_null","fragment":"generated_fragment_null","matches":[{"text":"generated_text_null","indices":[13]}]}],"related":[{"topic_relation":{"id":13,"name":"generated_name_null","topic_id":13,"relation_type":"generated_relation_type_null"}}],"aliases":[{"topic_relation":{"id":13,"name":"generated_name_null","topic_id":13,"relation_type":"generated_relation_type_null"}}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHub\Schema\SearchResultTextMatches> $textMatches
     * @param ?array<\ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related> $related
     * @param ?array<\ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Aliases> $aliases
     */
    public function __construct(public string $name, #[\EventSauce\ObjectHydrator\MapFrom('display_name')] public ?string $displayName, #[\EventSauce\ObjectHydrator\MapFrom('short_description')] public ?string $shortDescription, public ?string $description, #[\EventSauce\ObjectHydrator\MapFrom('created_by')] public ?string $createdBy, public ?string $released, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, public bool $featured, public bool $curated, public int $score, #[\EventSauce\ObjectHydrator\MapFrom('repository_count')] public ?int $repositoryCount, #[\EventSauce\ObjectHydrator\MapFrom('logo_url')] public ?string $logoUrl, #[\EventSauce\ObjectHydrator\MapFrom('text_matches')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\SearchResultTextMatches::class)] public ?array $textMatches, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\TopicSearchResultItem\Related::class)] public ?array $related, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\TopicSearchResultItem\Aliases::class)] public ?array $aliases)
    {
    }
}
