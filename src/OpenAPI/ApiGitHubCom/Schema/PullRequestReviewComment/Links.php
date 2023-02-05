<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment;

final class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","pull_request"],"type":"object","properties":{"self":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"]}}},"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"]}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"]}}}}}';
    public const SCHEMA_TITLE = 'PullRequestReviewComment\\Links';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Self_ $self;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Html $html;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\PullRequest $pull_request;
    public function __construct(object $self, object $html, object $pull_request)
    {
        $this->self = $self;
        $this->html = $html;
        $this->pull_request = $pull_request;
    }
}
