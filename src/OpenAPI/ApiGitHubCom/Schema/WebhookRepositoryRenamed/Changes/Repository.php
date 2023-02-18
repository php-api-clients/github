<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookRepositoryRenamed\Changes;

final readonly class Repository
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDiscussionCommentEdited\Changes\Body $name;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDiscussionCommentEdited\Changes\Body $name)
    {
        $this->name = $name;
    }
}
