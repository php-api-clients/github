<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class RepositoryCollaboratorPermission
{
    public const SCHEMA_TITLE       = 'Repository Collaborator Permission';
    public const SCHEMA_DESCRIPTION = 'Repository Collaborator Permission';
    private string $permission;
    private $user;

    public function permission(): string
    {
        return $this->permission;
    }

    public function user()
    {
        return $this->user;
    }
}
