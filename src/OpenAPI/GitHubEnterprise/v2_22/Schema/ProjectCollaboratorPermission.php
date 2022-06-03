<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class ProjectCollaboratorPermission
{
    public const SCHEMA_TITLE = 'Project Collaborator Permission';
    public const SCHEMA_DESCRIPTION = 'Project Collaborator Permission';
    private string $permission;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\NullableSimpleUser $user = null;
    public function permission() : string
    {
        return $this->permission;
    }
    /**
     * Simple User
     */
    public function user() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\NullableSimpleUser
    {
        return $this->user;
    }
}
