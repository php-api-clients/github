<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class RepositoryCollaboratorPermission
{
    public const SCHEMA_TITLE = 'Repository Collaborator Permission';
    public const SPL_HASH = '000000000c92e5bb000000006ad867a6';
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
