<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ParticipationStats
{
    public const SCHEMA_TITLE = 'Participation Stats';
    public const SPL_HASH = '000000000c1cee260000000065732ccc';
    public const SCHEMA_DESCRIPTION = '';
    private array $all;
    private array $owner;
    public function all() : array
    {
        return $this->all;
    }
    public function owner() : array
    {
        return $this->owner;
    }
}
