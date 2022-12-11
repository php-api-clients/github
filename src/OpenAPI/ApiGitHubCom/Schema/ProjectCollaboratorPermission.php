<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ProjectCollaboratorPermission
{
    public const SCHEMA_TITLE = 'Project Collaborator Permission';
    public const SCHEMA_DESCRIPTION = 'Project Collaborator Permission';
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
