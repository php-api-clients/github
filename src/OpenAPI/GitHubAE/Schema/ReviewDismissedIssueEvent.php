<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ReviewDismissedIssueEvent
{
    public const SCHEMA_TITLE = 'Review Dismissed Issue Event';
    public const SCHEMA_DESCRIPTION = 'Review Dismissed Issue Event';
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
    private array $dismissed_review = array();
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
    public function dismissed_review() : array
    {
        return $this->dismissed_review;
    }
}
