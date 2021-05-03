<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RepositoryCollaboratorPermission
{
    public const SCHEMA_TITLE = 'Repository Collaborator Permission';
    public const SPL_HASH = '0000000054d5e7bf0000000071115dec';
    public const SCHEMA_DESCRIPTION = 'Repository Collaborator Permission';
    private string $permission;
    private $user;
    public function permission() : string
    {
        return $this->permission;
    }
    public function user()
    {
        return $this->user;
    }
}
