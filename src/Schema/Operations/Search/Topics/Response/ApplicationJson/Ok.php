<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Search\Topics\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{"required":["total_count","incomplete_results","items"],"type":"object","properties":{"total_count":{"type":"integer"},"incomplete_results":{"type":"boolean"},"items":{"type":"array","items":{"title":"Topic Search Result Item","required":["name","display_name","short_description","description","created_by","released","created_at","updated_at","featured","curated","score"],"type":"object","properties":{"name":{"type":"string"},"display_name":{"type":["string","null"]},"short_description":{"type":["string","null"]},"description":{"type":["string","null"]},"created_by":{"type":["string","null"]},"released":{"type":["string","null"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"featured":{"type":"boolean"},"curated":{"type":"boolean"},"score":{"type":"number"},"repository_count":{"type":["integer","null"]},"logo_url":{"type":["string","null"],"format":"uri"},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}},"related":{"type":["array","null"],"items":{"type":"object","properties":{"topic_relation":{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}}}},"aliases":{"type":["array","null"],"items":{"type":"object","properties":{"topic_relation":{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}}}}},"description":"Topic Search Result Item"}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":11,"incomplete_results":false,"items":[{"name":"generated","display_name":"generated","short_description":"generated","description":"generated","created_by":"generated","released":"generated","created_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00","featured":false,"curated":false,"score":0.5,"repository_count":16,"logo_url":"https:\\/\\/example.com\\/","text_matches":[{"object_url":"generated","object_type":"generated","property":"generated","fragment":"generated","matches":[{"text":"generated","indices":[8,9]},{"text":"generated","indices":[8,9]}]},{"object_url":"generated","object_type":"generated","property":"generated","fragment":"generated","matches":[{"text":"generated","indices":[8,9]},{"text":"generated","indices":[8,9]}]}],"related":null,"aliases":null},{"name":"generated","display_name":"generated","short_description":"generated","description":"generated","created_by":"generated","released":"generated","created_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00","featured":false,"curated":false,"score":0.5,"repository_count":16,"logo_url":"https:\\/\\/example.com\\/","text_matches":[{"object_url":"generated","object_type":"generated","property":"generated","fragment":"generated","matches":[{"text":"generated","indices":[8,9]},{"text":"generated","indices":[8,9]}]},{"object_url":"generated","object_type":"generated","property":"generated","fragment":"generated","matches":[{"text":"generated","indices":[8,9]},{"text":"generated","indices":[8,9]}]}],"related":null,"aliases":null}]}';

    public function __construct(#[MapFrom('total_count')]
    public int $totalCount, #[MapFrom('incomplete_results')]
    public bool $incompleteResults, public array $items,)
    {
    }
}
