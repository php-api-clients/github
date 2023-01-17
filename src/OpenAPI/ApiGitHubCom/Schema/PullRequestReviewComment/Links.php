<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment;

final class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","pull_request"],"type":"object","properties":{"self":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"]}}},"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"]}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"]}}}}}';
    public const SCHEMA_TITLE = 'PullRequestReviewComment\\Links';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Self_::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Self_ $self;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Html::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Html $html;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\PullRequest::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\PullRequest $pull_request;
    public function self() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Self_
    {
        return $this->self;
    }
    public function html() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Html
    {
        return $this->html;
    }
    public function pull_request() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\PullRequest
    {
        return $this->pull_request;
    }
}
