<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ParticipationStats
{
    public const SCHEMA_TITLE = 'Participation Stats';
    public const SPL_HASH = '0000000054d5eccb0000000071115dec';
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
