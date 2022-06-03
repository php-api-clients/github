<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class RepositoryCollaboratorPermission
{
    public const SCHEMA_TITLE = 'Repository Collaborator Permission';
    public const SCHEMA_DESCRIPTION = 'Repository Collaborator Permission';
    private string $permission;
    /**
     * Collaborator
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\NullableCollaborator::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\NullableCollaborator $user = null;
    public function permission() : string
    {
        return $this->permission;
    }
    /**
     * Collaborator
     */
    public function user() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\NullableCollaborator
    {
        return $this->user;
    }
}
