<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ExternalGroups
{
    public const SCHEMA_TITLE = 'ExternalGroups';
    public const SCHEMA_DESCRIPTION = 'A list of external groups available to be connected to a team';
    /**
     * An array of external groups available to be mapped to a team
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroups\Groups>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroups\Groups::class)
     */
    private array $groups = array();
    /**
     * An array of external groups available to be mapped to a team
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroups\Groups>
     */
    public function groups() : array
    {
        return $this->groups;
    }
}
