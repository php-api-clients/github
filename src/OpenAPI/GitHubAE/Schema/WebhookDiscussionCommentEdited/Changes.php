<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookDiscussionCommentEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'WebhookDiscussionCommentEdited\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Body::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Body $body;
    public function body() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Body
    {
        return $this->body;
    }
}
