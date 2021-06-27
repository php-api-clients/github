<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PendingDeployment;

final class Reviewers
{
    public const SCHEMA_TITLE = 'pending-deployment::reviewers';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The type of reviewer. Must be one of: `User` or `Team`
     */
    private string $type;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $reviewer;
    /**
     * The type of reviewer. Must be one of: `User` or `Team`
     */
    public function type() : string
    {
        return $this->type;
    }
    public function reviewer() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->reviewer;
    }
}
