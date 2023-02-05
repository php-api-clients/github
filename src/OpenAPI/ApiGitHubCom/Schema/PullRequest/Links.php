<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest;

final class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","issue","comments","review_comments","review_comment","commits","statuses"],"type":"object","properties":{"comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"commits":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"issue":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"review_comment":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"review_comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"statuses":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}}';
    public const SCHEMA_TITLE = 'PullRequest\\Links';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Comments $comments;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Commits $commits;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Html $html;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Issue $issue;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\ReviewComment $review_comment;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\ReviewComments $review_comments;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Self_ $self;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Statuses $statuses;
    public function __construct(object $comments, object $commits, object $html, object $issue, object $review_comment, object $review_comments, object $self, object $statuses)
    {
        $this->comments = $comments;
        $this->commits = $commits;
        $this->html = $html;
        $this->issue = $issue;
        $this->review_comment = $review_comment;
        $this->review_comments = $review_comments;
        $this->self = $self;
        $this->statuses = $statuses;
    }
}
