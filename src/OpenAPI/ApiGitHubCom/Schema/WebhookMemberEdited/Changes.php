<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMemberEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"old_permission":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous permissions of the collaborator if the action was edited."}}},"permission":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}},"description":"The changes to the collaborator permissions"}';
    public const SCHEMA_TITLE = 'WebhookMemberEdited\\Changes';
    public const SCHEMA_DESCRIPTION = 'The changes to the collaborator permissions';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\OldPermission $old_permission;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Permission $permission;
    public function __construct(object $old_permission, object $permission)
    {
        $this->old_permission = $old_permission;
        $this->permission = $permission;
    }
}
