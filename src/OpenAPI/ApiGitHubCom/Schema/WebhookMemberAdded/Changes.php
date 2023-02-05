<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMemberAdded;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"permission":{"required":["to"],"type":"object","properties":{"to":{"enum":["write","admin","read"],"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'WebhookMemberAdded\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Permission $permission;
    public function __construct(object $permission)
    {
        $this->permission = $permission;
    }
}
