<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestSimple;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link;

final readonly class Links
{
    public const SCHEMA_JSON        = '{"required":["comments","commits","statuses","html","issue","review_comments","review_comment","self"],"type":"object","properties":{"comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"commits":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"statuses":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"issue":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"review_comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"review_comment":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Hypermedia Link
     */
    public ?Link $comments;
    /**
     * Hypermedia Link
     */
    public ?Link $commits;
    /**
     * Hypermedia Link
     */
    public ?Link $statuses;
    /**
     * Hypermedia Link
     */
    public ?Link $html;
    /**
     * Hypermedia Link
     */
    public ?Link $issue;
    /**
     * Hypermedia Link
     */
    public ?Link $review_comments;
    /**
     * Hypermedia Link
     */
    public ?Link $review_comment;
    /**
     * Hypermedia Link
     */
    public ?Link $self;

    public function __construct(Link $comments, Link $commits, Link $statuses, Link $html, Link $issue, Link $review_comments, Link $review_comment, Link $self)
    {
        $this->comments        = $comments;
        $this->commits         = $commits;
        $this->statuses        = $statuses;
        $this->html            = $html;
        $this->issue           = $issue;
        $this->review_comments = $review_comments;
        $this->review_comment  = $review_comment;
        $this->self            = $self;
    }
}
