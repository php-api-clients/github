<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class RepositoryCollaboratorPermission
{
    public const SCHEMA_TITLE = 'Repository Collaborator Permission';
    public const SCHEMA_DESCRIPTION = 'Repository Collaborator Permission';
    private string $permission;
    private string $role_name;
    /**
     * Collaborator
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\NullableCollaborator::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\NullableCollaborator $user = null;
    public function permission() : string
    {
        return $this->permission;
    }
    public function role_name() : string
    {
        return $this->role_name;
    }
    /**
     * Collaborator
     */
    public function user() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\NullableCollaborator
    {
        return $this->user;
    }
}
