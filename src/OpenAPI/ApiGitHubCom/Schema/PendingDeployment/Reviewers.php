<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PendingDeployment;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser;

final class Reviewers
{
    public const SCHEMA_TITLE       = 'pending-deployment::reviewers';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The type of reviewer. Must be one of: `User` or `Team`
     */
    private string $type;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class) */
    private SimpleUser $reviewer;

    /**
     * The type of reviewer. Must be one of: `User` or `Team`
     */
    public function type(): string
    {
        return $this->type;
    }

    public function reviewer(): SimpleUser
    {
        return $this->reviewer;
    }
}
