<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GroupMapping\Groups;

final class GroupMapping
{
    public const SCHEMA_TITLE       = 'GroupMapping';
    public const SCHEMA_DESCRIPTION = 'External Groups to be mapped to a team for membership';
    /**
     * Array of groups to be mapped to this team
     *
     * @var array<Groups>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GroupMapping\Groups::class)
     */
    private array $groups = [];

    public function groups(): array
    {
        return $this->groups;
    }
}
