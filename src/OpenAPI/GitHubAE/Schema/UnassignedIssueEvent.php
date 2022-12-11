<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class UnassignedIssueEvent
{
    public const SCHEMA_TITLE = 'Unassigned Issue Event';
    public const SCHEMA_DESCRIPTION = 'Unassigned Issue Event';
    private int $id;
    private string $node_id;
    private string $url;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser $actor;
    private string $event;
    private $commit_id;
    private $commit_url;
    private string $created_at;
    private $performed_via_github_app;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser $assignee;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser $assigner;
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
     * A GitHub user.
     */
    public function actor() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser
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
     * A GitHub user.
     */
    public function assignee() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser
    {
        return $this->assignee;
    }
    /**
     * A GitHub user.
     */
    public function assigner() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser
    {
        return $this->assigner;
    }
}
