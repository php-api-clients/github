<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Topic
{
    public const SCHEMA_TITLE = 'Topic';
    public const SPL_HASH = '0000000008b93cf900000000412ebbda';
    public const SCHEMA_DESCRIPTION = 'A topic aggregates entities that are related to a subject.';
    private array $names = array();
    public function names() : array
    {
        return $this->names;
    }
}
