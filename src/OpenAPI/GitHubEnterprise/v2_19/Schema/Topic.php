<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Topic
{
    public const SCHEMA_TITLE = 'Topic';
    public const SPL_HASH = '000000005bc9f43c000000002dbcf303';
    public const SCHEMA_DESCRIPTION = 'A topic aggregates entities that are related to a subject.';
    private array $names = array();
    public function names() : array
    {
        return $this->names;
    }
}
