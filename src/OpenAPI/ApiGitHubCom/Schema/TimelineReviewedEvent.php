<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class TimelineReviewedEvent
{
    public const SCHEMA_TITLE = 'Timeline Reviewed Event';
    public const SCHEMA_DESCRIPTION = 'Timeline Reviewed Event';
    private string $event;
    /**
     * Unique identifier of the review
     */
    private int $id;
    private string $node_id;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $user = null;
    /**
     * The text of the review.
     */
    private ?string $body = null;
    private string $state;
    private string $html_url;
    private string $pull_request_url;
    private array $_links = array();
    private ?string $submitted_at = null;
    /**
     * A commit SHA for the review.
     */
    private string $commit_id;
    private ?string $body_html = null;
    private ?string $body_text = null;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    public function event() : string
    {
        return $this->event;
    }
    /**
     * Unique identifier of the review
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
     * Simple User
     */
    public function user() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->user;
    }
    /**
     * The text of the review.
     */
    public function body() : ?string
    {
        return $this->body;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function pull_request_url() : string
    {
        return $this->pull_request_url;
    }
    public function _links() : array
    {
        return $this->_links;
    }
    public function submitted_at() : ?string
    {
        return $this->submitted_at;
    }
    /**
     * A commit SHA for the review.
     */
    public function commit_id() : string
    {
        return $this->commit_id;
    }
    public function body_html() : ?string
    {
        return $this->body_html;
    }
    public function body_text() : ?string
    {
        return $this->body_text;
    }
    /**
     * How the author is associated with the repository.
     */
    public function author_association() : string
    {
        return $this->author_association;
    }
}
