<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookDiscussionEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'WebhookDiscussionEdited\\Changes';
    public const SCHEMA_DESCRIPTION = '';
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
