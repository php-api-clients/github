<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ParticipationStats
{
    public const SCHEMA_TITLE = 'Participation Stats';
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
