<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class GroupMapping
{
    public const SCHEMA_TITLE = 'GroupMapping';
    public const SCHEMA_DESCRIPTION = 'External Groups to be mapped to a team for membership';
    /**
     * Array of groups to be mapped to this team
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GroupMapping\Groups>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GroupMapping\Groups::class)
     */
    private array $groups = array();
    /**
     * Array of groups to be mapped to this team
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GroupMapping\Groups>
     */
    public function groups() : array
    {
        return $this->groups;
    }
}
