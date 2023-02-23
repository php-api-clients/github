<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\TimelineReviewedEvent\Links;

final readonly class Html
{
    public const SCHEMA_JSON = '{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $href;
    public function __construct(string $href)
    {
        $this->href = $href;
    }
}
