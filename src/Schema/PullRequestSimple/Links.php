<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\PullRequestSimple;

final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["comments","commits","statuses","html","issue","review_comments","review_comment","self"],"type":"object","properties":{"comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"commits":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"statuses":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"issue":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"review_comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"review_comment":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Hypermedia Link
     */
    public ?\ApiClients\Client\Github\Schema\Link $comments;
    /**
     * Hypermedia Link
     */
    public ?\ApiClients\Client\Github\Schema\Link $commits;
    /**
     * Hypermedia Link
     */
    public ?\ApiClients\Client\Github\Schema\Link $statuses;
    /**
     * Hypermedia Link
     */
    public ?\ApiClients\Client\Github\Schema\Link $html;
    /**
     * Hypermedia Link
     */
    public ?\ApiClients\Client\Github\Schema\Link $issue;
    /**
     * Hypermedia Link
     */
    public ?\ApiClients\Client\Github\Schema\Link $review_comments;
    /**
     * Hypermedia Link
     */
    public ?\ApiClients\Client\Github\Schema\Link $review_comment;
    /**
     * Hypermedia Link
     */
    public ?\ApiClients\Client\Github\Schema\Link $self;
    public function __construct(\ApiClients\Client\Github\Schema\Link $comments, \ApiClients\Client\Github\Schema\Link $commits, \ApiClients\Client\Github\Schema\Link $statuses, \ApiClients\Client\Github\Schema\Link $html, \ApiClients\Client\Github\Schema\Link $issue, \ApiClients\Client\Github\Schema\Link $review_comments, \ApiClients\Client\Github\Schema\Link $review_comment, \ApiClients\Client\Github\Schema\Link $self)
    {
        $this->comments = $comments;
        $this->commits = $commits;
        $this->statuses = $statuses;
        $this->html = $html;
        $this->issue = $issue;
        $this->review_comments = $review_comments;
        $this->review_comment = $review_comment;
        $this->self = $self;
    }
}
