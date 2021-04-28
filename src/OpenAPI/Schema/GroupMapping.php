<?php

namespace ApiClients\Client\Github\OpenAPI\Schema;

final class GroupMapping
{
    public const SCHEMA_TITLE = 'GroupMapping';
    public const SCHEMA_DESCRIPTION = 'External Groups to be mapped to a team for membership';
    /**Array of groups to be mapped to this team**/
    private array $groups;
    public function groups() : array
    {
        return $this->groups;
    }
}
