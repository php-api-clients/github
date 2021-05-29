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
    private ?string $group_id = null;
    /**
     * The name of the group
     */
    private ?string $group_name = null;
    /**
     * a description of the group
     */
    private ?string $group_description = null;
    /**
     * synchronization status for this group mapping
     */
    private ?string $status = null;
    /**
     * the time of the last sync for this group-mapping
     */
    private ?string $synced_at = null;

    public function group_id(): ?string
    {
        return $this->group_id;
    }

    public function group_name(): ?string
    {
        return $this->group_name;
    }

    public function group_description(): ?string
    {
        return $this->group_description;
    }

    public function status(): ?string
    {
        return $this->status;
    }

    public function synced_at(): ?string
    {
        return $this->synced_at;
    }
}
