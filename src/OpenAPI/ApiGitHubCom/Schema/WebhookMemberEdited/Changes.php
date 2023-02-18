<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMemberEdited;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMemberEdited\Changes\OldPermission;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMemberEdited\Changes\Permission;

final readonly class Changes
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"old_permission":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous permissions of the collaborator if the action was edited."}}},"permission":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}},"description":"The changes to the collaborator permissions"}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the collaborator permissions';
    public ?OldPermission $old_permission;
    public ?Permission $permission;

    public function __construct(OldPermission $old_permission, Permission $permission)
    {
        $this->old_permission = $old_permission;
        $this->permission     = $permission;
    }
}
