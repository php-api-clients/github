<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ConvertedNoteToIssueIssueEvent
{
    public const SCHEMA_TITLE = 'Converted Note to Issue Issue Event';
    public const SCHEMA_DESCRIPTION = 'Converted Note to Issue Issue Event';
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
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Integration::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Integration $performed_via_github_app;
    private array $project_card = array();
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
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    public function performed_via_github_app() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Integration
    {
        return $this->performed_via_github_app;
    }
    public function project_card() : array
    {
        return $this->project_card;
    }
}
