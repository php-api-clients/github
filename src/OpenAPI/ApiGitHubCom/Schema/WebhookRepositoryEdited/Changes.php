<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookRepositoryEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"default_branch":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"description":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}},"homepage":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}},"topics":{"type":"object","properties":{"from":{"type":["array","null"],"items":{"type":"string"}}}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WebhookRepositoryEdited\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\DefaultBranch $default_branch;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Description $description;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Homepage $homepage;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Topics $topics;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\DefaultBranch $default_branch, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Description $description, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Homepage $homepage, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Topics $topics)
    {
        $this->default_branch = $default_branch;
        $this->description = $description;
        $this->homepage = $homepage;
        $this->topics = $topics;
    }
}
