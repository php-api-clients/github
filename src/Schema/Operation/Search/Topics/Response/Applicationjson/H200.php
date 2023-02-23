<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Operation\Search\Topics\Response\Applicationjson;

final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","incomplete_results","items"],"type":"object","properties":{"total_count":{"type":"integer"},"incomplete_results":{"type":"boolean"},"items":{"type":"array","items":{"title":"Topic Search Result Item","required":["name","display_name","short_description","description","created_by","released","created_at","updated_at","featured","curated","score"],"type":"object","properties":{"name":{"type":"string"},"display_name":{"type":["string","null"]},"short_description":{"type":["string","null"]},"description":{"type":["string","null"]},"created_by":{"type":["string","null"]},"released":{"type":["string","null"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"featured":{"type":"boolean"},"curated":{"type":"boolean"},"score":{"type":"number"},"repository_count":{"type":["integer","null"]},"logo_url":{"type":["string","null"],"format":"uri"},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}},"related":{"type":["array","null"],"items":{"type":"object","properties":{"topic_relation":{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}}}},"aliases":{"type":["array","null"],"items":{"type":"object","properties":{"topic_relation":{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}}}}},"description":"Topic Search Result Item"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $total_count;
    public ?bool $incomplete_results;
    public ?array $items;
    public function __construct(int $total_count, bool $incomplete_results, array $items)
    {
        $this->total_count = $total_count;
        $this->incomplete_results = $incomplete_results;
        $this->items = $items;
    }
}
