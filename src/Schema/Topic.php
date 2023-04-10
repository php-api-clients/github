<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Topic
{
    public const SCHEMA_JSON = '{"title":"Topic","required":["names"],"type":"object","properties":{"names":{"type":"array","items":{"type":"string"}}},"description":"A topic aggregates entities that are related to a subject."}';
    public const SCHEMA_TITLE = 'Topic';
    public const SCHEMA_DESCRIPTION = 'A topic aggregates entities that are related to a subject.';
    public const SCHEMA_EXAMPLE_DATA = '{"names":["generated_names_null"]}';
    /**
     * @param array<string> $names
     */
    public function __construct(public array $names)
    {
    }
}
