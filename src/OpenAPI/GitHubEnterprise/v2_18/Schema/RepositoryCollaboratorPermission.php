<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class RepositoryCollaboratorPermission
{
    public const SCHEMA_TITLE = 'Repository Collaborator Permission';
    public const SPL_HASH = '00000000577b28f60000000061bd81a4';
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
