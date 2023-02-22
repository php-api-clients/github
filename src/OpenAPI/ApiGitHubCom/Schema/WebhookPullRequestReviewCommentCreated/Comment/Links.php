<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestReviewCommentCreated\Comment;

final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $html;
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $pull_request;
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $self;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $html, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $pull_request, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $self)
    {
        $this->html = $html;
        $this->pull_request = $pull_request;
        $this->self = $self;
    }
}
