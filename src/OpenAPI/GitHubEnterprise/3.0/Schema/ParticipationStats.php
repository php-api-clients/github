<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Schema;

final class ParticipationStats
{
    public const SCHEMA_TITLE = 'Participation Stats';
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
