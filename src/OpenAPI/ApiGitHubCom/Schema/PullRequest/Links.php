<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest;

final class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","issue","comments","review_comments","review_comment","commits","statuses"],"type":"object","properties":{"comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"commits":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"issue":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"review_comment":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"review_comments":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"statuses":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}}';
    public const SCHEMA_TITLE = 'PullRequest\\Links';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Comments::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Comments $comments;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Commits::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Commits $commits;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Html::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Html $html;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Issue::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Issue $issue;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\ReviewComment::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\ReviewComment $review_comment;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\ReviewComments::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\ReviewComments $review_comments;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Self::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Self $self;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Statuses::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Statuses $statuses;
    public function comments() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Comments
    {
        return $this->comments;
    }
    public function commits() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Commits
    {
        return $this->commits;
    }
    public function html() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Html
    {
        return $this->html;
    }
    public function issue() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Issue
    {
        return $this->issue;
    }
    public function review_comment() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\ReviewComment
    {
        return $this->review_comment;
    }
    public function review_comments() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\ReviewComments
    {
        return $this->review_comments;
    }
    public function self() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Self
    {
        return $this->self;
    }
    public function statuses() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Statuses
    {
        return $this->statuses;
    }
}
