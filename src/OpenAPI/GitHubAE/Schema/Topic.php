<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Topic
{
    public const SCHEMA_TITLE = 'Topic';
    public const SPL_HASH = '000000000c1cee320000000065732ccc';
    public const SCHEMA_DESCRIPTION = 'A topic aggregates entities that are related to a subject.';
    private array $names;
    public function names() : array
    {
        return $this->names;
    }
}
