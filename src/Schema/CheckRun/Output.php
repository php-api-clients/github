<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CheckRun;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Output
{
    public const SCHEMA_JSON         = '{"required":["title","summary","text","annotations_count","annotations_url"],"type":"object","properties":{"title":{"type":["string","null"]},"summary":{"type":["string","null"]},"text":{"type":["string","null"]},"annotations_count":{"type":"integer"},"annotations_url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated","summary":"generated","text":"generated","annotations_count":17,"annotations_url":"https:\\/\\/example.com\\/"}';

    public function __construct(public string|null $title, public string|null $summary, public string|null $text, #[MapFrom('annotations_count')]
    public int $annotationsCount, #[MapFrom('annotations_url')]
    public string $annotationsUrl,)
    {
    }
}
