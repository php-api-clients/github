<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookMemberEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"old_permission":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous permissions of the collaborator if the action was edited."}}},"permission":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}},"description":"The changes to the collaborator permissions"}';
    public const SCHEMA_TITLE = 'WebhookMemberEdited\\Changes';
    public const SCHEMA_DESCRIPTION = 'The changes to the collaborator permissions';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\OldPermission::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\OldPermission $old_permission;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Permission::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Permission $permission;
    public function old_permission() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\OldPermission
    {
        return $this->old_permission;
    }
    public function permission() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Permission
    {
        return $this->permission;
    }
}
