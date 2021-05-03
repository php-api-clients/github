<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class RepositoryCollaboratorPermission
{
    public const SCHEMA_TITLE = 'Repository Collaborator Permission';
    public const SPL_HASH = '0000000065d65a42000000007ce49c9a';
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
