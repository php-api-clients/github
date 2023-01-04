<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookMemberAdded;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"permission":{"required":["to"],"type":"object","properties":{"to":{"enum":["write","admin","read"],"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'WebhookMemberAdded\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Permission::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Permission $permission;
    public function permission() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Permission
    {
        return $this->permission;
    }
}
