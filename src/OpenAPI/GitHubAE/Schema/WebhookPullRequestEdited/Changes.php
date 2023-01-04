<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookPullRequestEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"base":{"required":["ref","sha"],"type":"object","properties":{"ref":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"sha":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}},"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title if the action was `edited`."}}}},"description":"The changes to the comment if the action was `edited`."}';
    public const SCHEMA_TITLE = 'WebhookPullRequestEdited\\Changes';
    public const SCHEMA_DESCRIPTION = 'The changes to the comment if the action was `edited`.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Base::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Base $base;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Body::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Body $body;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Title::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Title $title;
    public function base() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Base
    {
        return $this->base;
    }
    public function body() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Body
    {
        return $this->body;
    }
    public function title() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Title
    {
        return $this->title;
    }
}
