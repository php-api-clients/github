<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ParticipationStats
{
    public const SCHEMA_TITLE = 'Participation Stats';
    public const SPL_HASH = '000000005dfddab60000000040885a06';
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
