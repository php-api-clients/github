<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment\Links\Html;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment\Links\PullRequest;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment\Links\Self_;

final readonly class Links
{
    public const SCHEMA_JSON        = '{"required":["self","html","pull_request"],"type":"object","properties":{"self":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"]}}},"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"]}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"]}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?Self_ $self;
    public ?Html $html;
    public ?PullRequest $pull_request;

    public function __construct(Self_ $self, Html $html, PullRequest $pull_request)
    {
        $this->self         = $self;
        $this->html         = $html;
        $this->pull_request = $pull_request;
    }
}
