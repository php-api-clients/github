<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CFcb3B672496F0C9C170A123B0A82852F
{
    public const SCHEMA_JSON = '{"required":["group_id","group_name","updated_at"],"type":"object","properties":{"group_id":{"type":"integer","description":"The internal ID of the group","examples":[1]},"group_name":{"type":"string","description":"The display name of the group","examples":["group-azuread-test"]},"updated_at":{"type":"string","description":"The time of the last update for this group","examples":["2019-06-03 22:27:15:000 -700"]}}}';
    public const SCHEMA_TITLE = 'c_fcb3b672496f0c9c170a123b0a82852f';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The internal ID of the group
     */
    private int $group_id;
    /**
     * The display name of the group
     */
    private string $group_name;
    /**
     * The time of the last update for this group
     */
    private string $updated_at;
    /**
     * The internal ID of the group
     */
    public function group_id() : int
    {
        return $this->group_id;
    }
    /**
     * The display name of the group
     */
    public function group_name() : string
    {
        return $this->group_name;
    }
    /**
     * The time of the last update for this group
     */
    public function updated_at() : string
    {
        return $this->updated_at;
    }
}
