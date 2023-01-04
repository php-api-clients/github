<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestSimple;

final class Links
{
    public const SCHEMA_JSON = '{"required":["comments","commits","statuses","html","issue","review_comments","review_comment","self"],"type":"object","properties":{"comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"commits":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"statuses":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"issue":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"review_comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"review_comment":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"}}}';
    public const SCHEMA_TITLE = 'PullRequestSimple\\Links';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Hypermedia Link
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link $comments;
    /**
     * Hypermedia Link
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link $commits;
    /**
     * Hypermedia Link
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link $statuses;
    /**
     * Hypermedia Link
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link $html;
    /**
     * Hypermedia Link
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link $issue;
    /**
     * Hypermedia Link
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link $review_comments;
    /**
     * Hypermedia Link
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link $review_comment;
    /**
     * Hypermedia Link
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link $self;
    /**
     * Hypermedia Link
     */
    public function comments() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link
    {
        return $this->comments;
    }
    /**
     * Hypermedia Link
     */
    public function commits() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link
    {
        return $this->commits;
    }
    /**
     * Hypermedia Link
     */
    public function statuses() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link
    {
        return $this->statuses;
    }
    /**
     * Hypermedia Link
     */
    public function html() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link
    {
        return $this->html;
    }
    /**
     * Hypermedia Link
     */
    public function issue() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link
    {
        return $this->issue;
    }
    /**
     * Hypermedia Link
     */
    public function review_comments() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link
    {
        return $this->review_comments;
    }
    /**
     * Hypermedia Link
     */
    public function review_comment() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link
    {
        return $this->review_comment;
    }
    /**
     * Hypermedia Link
     */
    public function self() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Link
    {
        return $this->self;
    }
}
