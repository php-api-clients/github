<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\MilestonedIssueEvent;

final readonly class Milestone
{
    public const SCHEMA_JSON         = '{"required":["title"],"type":"object","properties":{"title":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated"}';

    public function __construct(public string $title)
    {
    }
}
