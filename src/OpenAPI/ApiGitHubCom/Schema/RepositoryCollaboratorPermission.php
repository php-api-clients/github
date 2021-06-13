<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RepositoryCollaboratorPermission
{
    public const SCHEMA_TITLE       = 'Repository Collaborator Permission';
    public const SCHEMA_DESCRIPTION = 'Repository Collaborator Permission';
    private string $permission;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class) */
    private SimpleUser $user;

    public function permission(): string
    {
        return $this->permission;
    }

    public function user(): SimpleUser
    {
        return $this->user;
    }
}
