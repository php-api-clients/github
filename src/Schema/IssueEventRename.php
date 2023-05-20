<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class IssueEventRename
{
    public const SCHEMA_JSON         = '{"title":"Issue Event Rename","required":["from","to"],"type":"object","properties":{"from":{"type":"string"},"to":{"type":"string"}},"description":"Issue Event Rename"}';
    public const SCHEMA_TITLE        = 'Issue Event Rename';
    public const SCHEMA_DESCRIPTION  = 'Issue Event Rename';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated","to":"generated"}';

    public function __construct(public string $from, public string $to)
    {
    }
}
