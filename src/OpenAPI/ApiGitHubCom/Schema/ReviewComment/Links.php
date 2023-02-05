<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment;

final class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","pull_request"],"type":"object","properties":{"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"}}}';
    public const SCHEMA_TITLE = 'ReviewComment\\Links';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Hypermedia Link
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link $self;
    /**
     * Hypermedia Link
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link $html;
    /**
     * Hypermedia Link
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link $pull_request;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link $self, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link $html, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Link $pull_request)
    {
        $this->self = $self;
        $this->html = $html;
        $this->pull_request = $pull_request;
    }
}
