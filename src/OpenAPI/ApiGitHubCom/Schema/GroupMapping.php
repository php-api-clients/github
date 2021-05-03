<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class GroupMapping
{
    public const SCHEMA_TITLE = 'GroupMapping';
    public const SPL_HASH = '000000000cd53fa90000000040effa88';
    public const SCHEMA_DESCRIPTION = 'External Groups to be mapped to a team for membership';
    /**
     * Array of groups to be mapped to this team
     */
    private array $groups = array();
    public function groups() : array
    {
        return $this->groups;
    }
}
