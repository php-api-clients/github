<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class IssueComment
{
    public const SCHEMA_TITLE = 'Issue Comment';
    public const SCHEMA_DESCRIPTION = 'Comments provide a way for people to collaborate on an issue.';
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
    private string $body;
    private string $body_text;
    private string $body_html;
    private string $html_url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $user;
    private string $created_at;
    private string $updated_at;
    private string $issue_url;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration $performed_via_github_app;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup $reactions;
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
    public function body() : string
    {
        return $this->body;
    }
    public function body_text() : string
    {
        return $this->body_text;
    }
    public function body_html() : string
    {
        return $this->body_html;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function user() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
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
    public function performed_via_github_app() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration
    {
        return $this->performed_via_github_app;
    }
    public function reactions() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup
    {
        return $this->reactions;
    }
}
