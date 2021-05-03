<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class GroupMapping
{
    public const SCHEMA_TITLE = 'GroupMapping';
    public const SPL_HASH = '0000000054d5e6ab0000000071115dec';
    public const SCHEMA_DESCRIPTION = 'External Groups to be mapped to a team for membership';
    /**
     * Array of groups to be mapped to this team
     */
    private array $groups;
    public function groups() : array
    {
        return $this->groups;
    }
}
