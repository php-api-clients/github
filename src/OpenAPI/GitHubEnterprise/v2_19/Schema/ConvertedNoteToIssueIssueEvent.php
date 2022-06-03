<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class ConvertedNoteToIssueIssueEvent
{
    public const SCHEMA_TITLE = 'Converted Note to Issue Issue Event';
    public const SCHEMA_DESCRIPTION = 'Converted Note to Issue Issue Event';
    private int $id;
    private string $node_id;
    private string $url;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\SimpleUser $actor;
    private string $event;
    private ?string $commit_id = null;
    private ?string $commit_url = null;
    private string $created_at;
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\Integration::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\Integration $performed_via_github_app;
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
     * Simple User
     */
    public function actor() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\SimpleUser
    {
        return $this->actor;
    }
    public function event() : string
    {
        return $this->event;
    }
    public function commit_id() : ?string
    {
        return $this->commit_id;
    }
    public function commit_url() : ?string
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
    public function performed_via_github_app() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\Integration
    {
        return $this->performed_via_github_app;
    }
    public function project_card() : array
    {
        return $this->project_card;
    }
}
