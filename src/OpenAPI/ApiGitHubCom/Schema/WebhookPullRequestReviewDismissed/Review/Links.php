<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestReviewDismissed\Review;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments;

final readonly class Links
{
    public const SCHEMA_JSON        = '{"required":["html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?Comments $html;
    public ?Comments $pull_request;

    public function __construct(Comments $html, Comments $pull_request)
    {
        $this->html         = $html;
        $this->pull_request = $pull_request;
    }
}
