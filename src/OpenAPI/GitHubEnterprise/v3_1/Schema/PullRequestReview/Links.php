<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestReview;

final class Links
{
    public const SCHEMA_JSON = '{"required":["html","pull_request"],"type":"object","properties":{"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'PullRequestReview\\Links';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Links\Html::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Links\Html $html;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Links\PullRequest::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Links\PullRequest $pull_request;
    public function html() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Links\Html
    {
        return $this->html;
    }
    public function pull_request() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Links\PullRequest
    {
        return $this->pull_request;
    }
}
