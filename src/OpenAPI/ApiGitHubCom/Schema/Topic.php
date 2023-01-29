<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Topic
{
    public const SCHEMA_JSON = '{"title":"Topic","required":["names"],"type":"object","properties":{"names":{"type":"array","items":{"type":"string"}}},"description":"A topic aggregates entities that are related to a subject."}';
    public const SCHEMA_TITLE = 'Topic';
    public const SCHEMA_DESCRIPTION = 'A topic aggregates entities that are related to a subject.';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Topic\Names>
     */
    public readonly array $names;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Topic\Names> $names
     */
    public function __construct(array $names)
    {
        $this->names = $names;
    }
}
