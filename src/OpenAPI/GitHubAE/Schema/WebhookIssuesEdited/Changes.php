<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookIssuesEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title."}}}},"description":"The changes to the issue."}';
    public const SCHEMA_TITLE = 'WebhookIssuesEdited\\Changes';
    public const SCHEMA_DESCRIPTION = 'The changes to the issue.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Body::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Body $body;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Title::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Title $title;
    public function body() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Body
    {
        return $this->body;
    }
    public function title() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Title
    {
        return $this->title;
    }
}
