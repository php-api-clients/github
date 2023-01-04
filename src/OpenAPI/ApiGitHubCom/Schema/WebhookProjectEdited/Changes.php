<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The changes to the project if the action was `edited`."}}}},"description":"The changes to the project if the action was `edited`."}';
    public const SCHEMA_TITLE = 'WebhookProjectEdited\\Changes';
    public const SCHEMA_DESCRIPTION = 'The changes to the project if the action was `edited`.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Body::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Body $body;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Name::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Name $name;
    public function body() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Body
    {
        return $this->body;
    }
    public function name() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Name
    {
        return $this->name;
    }
}
