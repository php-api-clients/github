<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMemberAdded;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMemberAdded\Changes\Permission;

final readonly class Changes
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"permission":{"required":["to"],"type":"object","properties":{"to":{"enum":["write","admin","read"],"type":"string"}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?Permission $permission;

    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
    }
}
