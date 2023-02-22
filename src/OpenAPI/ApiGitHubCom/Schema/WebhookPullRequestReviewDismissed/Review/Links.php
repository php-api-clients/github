<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestReviewDismissed\Review;

final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $html;
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $pull_request;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $html, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $pull_request)
    {
        $this->html = $html;
        $this->pull_request = $pull_request;
    }
}
