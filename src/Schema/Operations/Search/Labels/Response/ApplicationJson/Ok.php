<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Search\Labels\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{"required":["total_count","incomplete_results","items"],"type":"object","properties":{"total_count":{"type":"integer"},"incomplete_results":{"type":"boolean"},"items":{"type":"array","items":{"title":"Label Search Result Item","required":["id","node_id","url","name","color","default","description","score"],"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string","format":"uri"},"name":{"type":"string"},"color":{"type":"string"},"default":{"type":"boolean"},"description":{"type":["string","null"]},"score":{"type":"number"},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}}},"description":"Label Search Result Item"}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":11,"incomplete_results":false,"items":[{"id":2,"node_id":"generated","url":"https:\\/\\/example.com\\/","name":"generated","color":"generated","default":false,"description":"generated","score":0.5,"text_matches":[{"object_url":"generated","object_type":"generated","property":"generated","fragment":"generated","matches":[{"text":"generated","indices":[8,9]},{"text":"generated","indices":[8,9]}]},{"object_url":"generated","object_type":"generated","property":"generated","fragment":"generated","matches":[{"text":"generated","indices":[8,9]},{"text":"generated","indices":[8,9]}]}]},{"id":2,"node_id":"generated","url":"https:\\/\\/example.com\\/","name":"generated","color":"generated","default":false,"description":"generated","score":0.5,"text_matches":[{"object_url":"generated","object_type":"generated","property":"generated","fragment":"generated","matches":[{"text":"generated","indices":[8,9]},{"text":"generated","indices":[8,9]}]},{"object_url":"generated","object_type":"generated","property":"generated","fragment":"generated","matches":[{"text":"generated","indices":[8,9]},{"text":"generated","indices":[8,9]}]}]}]}';

    public function __construct(#[MapFrom('total_count')] public int $totalCount, #[MapFrom('incomplete_results')] public bool $incompleteResults, public array $items)
    {
    }
}
