<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroups;

final class Groups
{
    public const SCHEMA_TITLE = 'external-groups::groups';
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
