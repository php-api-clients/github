<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class RepositoryCollaboratorPermission
{
    public const SCHEMA_TITLE = 'Repository Collaborator Permission';
    public const SCHEMA_DESCRIPTION = 'Repository Collaborator Permission';
    private string $permission;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\NullableSimpleUser $user = null;
    public function permission() : string
    {
        return $this->permission;
    }
    /**
     * Simple User
     */
    public function user() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\NullableSimpleUser
    {
        return $this->user;
    }
}
