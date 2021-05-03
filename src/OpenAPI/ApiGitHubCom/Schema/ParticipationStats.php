<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ParticipationStats
{
    public const SCHEMA_TITLE = 'Participation Stats';
    public const SPL_HASH = '00000000252f4bb50000000029de5079';
    public const SCHEMA_DESCRIPTION = '';
    private array $all = array();
    private array $owner = array();
    public function all() : array
    {
        return $this->all;
    }
    public function owner() : array
    {
        return $this->owner;
    }
}
