<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestSimple;

final class Links
{
    public const SCHEMA_JSON = '{"required":["comments","commits","statuses","html","issue","review_comments","review_comment","self"],"type":"object","properties":{"comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"commits":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"statuses":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"issue":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"review_comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"review_comment":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"}}}';
    public const SCHEMA_TITLE = 'PullRequestSimple\\Links';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Hypermedia Link
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link $comments;
    /**
     * Hypermedia Link
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link $commits;
    /**
     * Hypermedia Link
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link $statuses;
    /**
     * Hypermedia Link
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link $html;
    /**
     * Hypermedia Link
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link $issue;
    /**
     * Hypermedia Link
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link $review_comments;
    /**
     * Hypermedia Link
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link $review_comment;
    /**
     * Hypermedia Link
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link $self;
    public function __construct(object $comments, object $commits, object $statuses, object $html, object $issue, object $review_comments, object $review_comment, object $self)
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
