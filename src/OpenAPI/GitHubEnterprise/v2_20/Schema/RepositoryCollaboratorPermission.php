<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class RepositoryCollaboratorPermission
{
    public const SCHEMA_TITLE = 'Repository Collaborator Permission';
    public const SPL_HASH = '000000005d4c9f63000000005494ca51';
    public const SCHEMA_DESCRIPTION = 'Repository Collaborator Permission';
    private ?string $permission = null;
    private $user;
    public function permission() : ?string
    {
        return $this->permission;
    }
    public function user()
    {
        return $this->user;
    }
}
