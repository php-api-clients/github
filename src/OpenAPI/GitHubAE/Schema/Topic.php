<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Topic
{
    public const SCHEMA_TITLE = 'Topic';
    public const SPL_HASH = '000000005dfddaa20000000040885a06';
    public const SCHEMA_DESCRIPTION = 'A topic aggregates entities that are related to a subject.';
    private array $names = array();
    public function names() : array
    {
        return $this->names;
    }
}
