<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class IssueComment
{
    public const SCHEMA_TITLE = 'issue comment';
    public const SCHEMA_DESCRIPTION = 'The [comment](https://docs.github.com/en/rest/reference/issues#comments) itself.';
    /**
     * URL for the issue comment
     */
    private string $url;
    private string $html_url;
    private string $issue_url;
    /**
     * Unique identifier of the issue comment
     */
    private int $id;
    private string $node_id;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $user;
    private string $created_at;
    private string $updated_at;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    /**
     * Contents of the issue comment
     */
    private string $body;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Reactions::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Reactions $reactions;
    private $performed_via_github_app;
    /**
     * URL for the issue comment
     */
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function issue_url() : string
    {
        return $this->issue_url;
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
    public function user() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
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
    /**
     * How the author is associated with the repository.
     */
    public function author_association() : string
    {
        return $this->author_association;
    }
    /**
     * Contents of the issue comment
     */
    public function body() : string
    {
        return $this->body;
    }
    public function reactions() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Reactions
    {
        return $this->reactions;
    }
    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
}
