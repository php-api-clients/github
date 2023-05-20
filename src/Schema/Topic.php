<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class Topic
{
    public const SCHEMA_JSON         = '{"title":"Topic","required":["names"],"type":"object","properties":{"names":{"type":"array","items":{"type":"string"}}},"description":"A topic aggregates entities that are related to a subject."}';
    public const SCHEMA_TITLE        = 'Topic';
    public const SCHEMA_DESCRIPTION  = 'A topic aggregates entities that are related to a subject.';
    public const SCHEMA_EXAMPLE_DATA = '{"names":["generated","generated"]}';

    public function __construct(public array $names)
    {
    }
}
