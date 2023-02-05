<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectsV2ProjectEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"description":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}},"public":{"type":"object","properties":{"from":{"type":"boolean"},"to":{"type":"boolean"}}},"short_description":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}},"title":{"type":"object","properties":{"from":{"type":"string"},"to":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'WebhookProjectsV2ProjectEdited\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Description $description;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Public_ $public;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\ShortDescription $short_description;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Title $title;
    public function __construct(object $description, object $public, object $short_description, object $title)
    {
        $this->description = $description;
        $this->public = $public;
        $this->short_description = $short_description;
        $this->title = $title;
    }
}
