<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Topic
{
    public const SCHEMA_TITLE = 'Topic';
    public const SPL_HASH = '00000000252f4b590000000029de5079';
    public const SCHEMA_DESCRIPTION = 'A topic aggregates entities that are related to a subject.';
    private array $names = array();
    public function names() : array
    {
        return $this->names;
    }
}
