<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links;

final readonly class Html
{
    public const SCHEMA_JSON         = '{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"href":"generated"}';

    public function __construct(public string $href)
    {
    }
}
