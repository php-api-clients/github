<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineReviewedEvent;

final class Links
{
    public const SCHEMA_JSON = '{"required":["html","pull_request"],"type":"object","properties":{"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'TimelineReviewedEvent\\Links';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Html $html;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\PullRequest $pull_request;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Html $html, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\PullRequest $pull_request)
    {
        $this->html = $html;
        $this->pull_request = $pull_request;
    }
}
