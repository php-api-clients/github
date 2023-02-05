<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Comment;

final class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}}';
    public const SCHEMA_TITLE = 'Comment\\Links';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Html $html;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\PullRequest $pull_request;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Self_ $self;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Html $html, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\PullRequest $pull_request, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links\Self_ $self)
    {
        $this->html = $html;
        $this->pull_request = $pull_request;
        $this->self = $self;
    }
}
