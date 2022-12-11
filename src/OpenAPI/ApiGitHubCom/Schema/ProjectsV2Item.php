<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ProjectsV2Item
{
    public const SCHEMA_TITLE = 'Projects v2 Item';
    public const SCHEMA_DESCRIPTION = 'An item belonging to a project';
    private int $id;
    private ?string $node_id = null;
    private ?string $project_node_id = null;
    private string $content_node_id;
    /**
     * The type of content tracked in a project item
     */
    private string $content_type;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $creator = null;
    private string $created_at;
    private string $updated_at;
    private $archived_at;
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function project_node_id() : ?string
    {
        return $this->project_node_id;
    }
    public function content_node_id() : string
    {
        return $this->content_node_id;
    }
    /**
     * The type of content tracked in a project item
     */
    public function content_type() : string
    {
        return $this->content_type;
    }
    /**
     * A GitHub user.
     */
    public function creator() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->creator;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function archived_at()
    {
        return $this->archived_at;
    }
}
