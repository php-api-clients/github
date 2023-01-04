<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Review;

final class Links
{
    public const SCHEMA_JSON = '{"required":["html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}}';
    public const SCHEMA_TITLE = 'Review\\Links';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Html::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Html $html;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\PullRequest::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\PullRequest $pull_request;
    public function html() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Html
    {
        return $this->html;
    }
    public function pull_request() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\PullRequest
    {
        return $this->pull_request;
    }
}
