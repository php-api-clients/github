<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class TimelineAssignedIssueEvent
{
    public const SCHEMA_TITLE = 'Timeline Assigned Issue Event';
    public const SCHEMA_DESCRIPTION = 'Timeline Assigned Issue Event';
    private int $id;
    private string $node_id;
    private string $url;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser $actor;
    private string $event;
    private $commit_id;
    private $commit_url;
    private string $created_at;
    private $performed_via_github_app;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser $assignee;
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    /**
     * Simple User
     */
    public function actor() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser
    {
        return $this->actor;
    }
    public function event() : string
    {
        return $this->event;
    }
    public function commit_id()
    {
        return $this->commit_id;
    }
    public function commit_url()
    {
        return $this->commit_url;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
    /**
     * Simple User
     */
    public function assignee() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser
    {
        return $this->assignee;
    }
}
