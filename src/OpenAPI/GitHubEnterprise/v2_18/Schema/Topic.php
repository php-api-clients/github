<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class Topic
{
    public const SCHEMA_TITLE = 'Topic';
    public const SPL_HASH = '000000000c929c42000000006ad867a6';
    public const SCHEMA_DESCRIPTION = 'A topic aggregates entities that are related to a subject.';
    private array $names = array();
    public function names() : array
    {
        return $this->names;
    }
}
