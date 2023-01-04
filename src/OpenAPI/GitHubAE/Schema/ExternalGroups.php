<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ExternalGroups
{
    public const SCHEMA_JSON = '{"title":"ExternalGroups","type":"object","properties":{"groups":{"type":"array","items":{"required":["group_id","group_name","updated_at"],"type":"object","properties":{"group_id":{"type":"integer","description":"The internal ID of the group","examples":[1]},"group_name":{"type":"string","description":"The display name of the group","examples":["group-azuread-test"]},"updated_at":{"type":"string","description":"The time of the last update for this group","examples":["2019-06-03 22:27:15:000 -700"]}}},"description":"An array of external groups available to be mapped to a team","examples":[{"group_id":1,"group_name":"group-azuread-test","updated_at":"2021-01-03 22:27:15:000 -700"},{"group_id":2,"group_name":"group-azuread-test2","updated_at":"2021-06-03 22:27:15:000 -700"}]}},"description":"A list of external groups available to be connected to a team"}';
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
