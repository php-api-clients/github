<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RepositoryCollaboratorPermission
{
    public const SCHEMA_TITLE = 'Repository Collaborator Permission';
    public const SCHEMA_DESCRIPTION = 'Repository Collaborator Permission';
    private string $permission;
    private string $role_name;
    private $user;
    public function permission() : string
    {
        return $this->permission;
    }
    public function role_name() : string
    {
        return $this->role_name;
    }
    public function user()
    {
        return $this->user;
    }
}
