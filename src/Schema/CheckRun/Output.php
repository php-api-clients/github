<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CheckRun;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Output
{
    public const SCHEMA_JSON         = '{"required":["title","summary","text","annotations_count","annotations_url"],"type":"object","properties":{"title":{"type":["string","null"]},"summary":{"type":["string","null"]},"text":{"type":["string","null"]},"annotations_count":{"type":"integer"},"annotations_url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated_title_null","summary":"generated_summary_null","text":"generated_text_null","annotations_count":13,"annotations_url":"https:\\/\\/example.com\\/"}';

    public function __construct(public ?string $title, public ?string $summary, public ?string $text, #[MapFrom('annotations_count')] public int $annotationsCount, #[MapFrom('annotations_url')] public string $annotationsUrl)
    {
    }
}
