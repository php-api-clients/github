<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class RepositoryCollaboratorPermission
{
    public const SCHEMA_TITLE = 'Repository Collaborator Permission';
    public const SPL_HASH = '0000000045a0ec460000000057b08344';
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
