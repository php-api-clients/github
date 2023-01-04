<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Topic
{
    public const SCHEMA_JSON = '{"title":"Topic","required":["names"],"type":"object","properties":{"names":{"type":"array","items":{"type":"string"}}},"description":"A topic aggregates entities that are related to a subject."}';
    public const SCHEMA_TITLE = 'Topic';
    public const SCHEMA_DESCRIPTION = 'A topic aggregates entities that are related to a subject.';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Topic\Names>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Topic\Names::class)
     */
    private array $names = array();
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Topic\Names>
     */
    public function names() : array
    {
        return $this->names;
    }
}
