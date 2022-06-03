<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class TimelineCommentEvent
{
    public const SCHEMA_TITLE = 'Timeline Comment Event';
    public const SCHEMA_DESCRIPTION = 'Timeline Comment Event';
    private string $event;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\SimpleUser $actor;
    /**
     * Unique identifier of the issue comment
     */
    private int $id;
    private string $node_id;
    /**
     * URL for the issue comment
     */
    private string $url;
    /**
     * Contents of the issue comment
     */
    private ?string $body = null;
    private ?string $body_text = null;
    private ?string $body_html = null;
    private string $html_url;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\SimpleUser $user;
    private string $created_at;
    private string $updated_at;
    private string $issue_url;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableIntegration::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableIntegration $performed_via_github_app = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\ReactionRollup::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\ReactionRollup $reactions = null;
    public function event() : string
    {
        return $this->event;
    }
    /**
     * Simple User
     */
    public function actor() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\SimpleUser
    {
        return $this->actor;
    }
    /**
     * Unique identifier of the issue comment
     */
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * URL for the issue comment
     */
    public function url() : string
    {
        return $this->url;
    }
    /**
     * Contents of the issue comment
     */
    public function body() : ?string
    {
        return $this->body;
    }
    public function body_text() : ?string
    {
        return $this->body_text;
    }
    public function body_html() : ?string
    {
        return $this->body_html;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * Simple User
     */
    public function user() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\SimpleUser
    {
        return $this->user;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function issue_url() : string
    {
        return $this->issue_url;
    }
    /**
     * How the author is associated with the repository.
     */
    public function author_association() : string
    {
        return $this->author_association;
    }
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    public function performed_via_github_app() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableIntegration
    {
        return $this->performed_via_github_app;
    }
    public function reactions() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\ReactionRollup
    {
        return $this->reactions;
    }
}
