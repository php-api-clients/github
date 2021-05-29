<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GroupMapping;

final class Groups
{
    public const SCHEMA_TITLE       = 'group-mapping::groups';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The ID of the group
     */
    private string $group_id;
    /**
     * The name of the group
     */
    private string $group_name;
    /**
     * a description of the group
     */
    private string $group_description;
    /**
     * synchronization status for this group mapping
     */
    private string $status;
    /**
     * the time of the last sync for this group-mapping
     */
    private string $synced_at;

    /**
     * The ID of the group
     */
    public function group_id(): string
    {
        return $this->group_id;
    }

    /**
     * The name of the group
     */
    public function group_name(): string
    {
        return $this->group_name;
    }

    /**
     * a description of the group
     */
    public function group_description(): string
    {
        return $this->group_description;
    }

    /**
     * synchronization status for this group mapping
     */
    public function status(): string
    {
        return $this->status;
    }

    /**
     * the time of the last sync for this group-mapping
     */
    public function synced_at(): string
    {
        return $this->synced_at;
    }
}
