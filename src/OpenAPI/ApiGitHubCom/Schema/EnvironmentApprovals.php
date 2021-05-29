<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EnvironmentApprovals\Environments;

final class EnvironmentApprovals
{
    public const SCHEMA_TITLE       = 'Environment Approval';
    public const SCHEMA_DESCRIPTION = 'An entry in the reviews log for environment deployments';
    /**
     * The list of environments that were approved or rejected
     */
    private array $environments = [];
    /**
     * Whether deployment to the environment(s) was approved or rejected
     */
    private string $state;
    /**
     * Simple User
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private SimpleUser $user = [];
    /**
     * The comment submitted with the deployment review
     */
    private string $comment;

    /**
     * The list of environments that were approved or rejected
     *
     * @return array<Environments>
     */
    public function environments(): array
    {
        return $this->environments;
    }

    /**
     * Whether deployment to the environment(s) was approved or rejected
     */
    public function state(): string
    {
        return $this->state;
    }

    /**
     * Simple User
     */
    public function user(): SimpleUser
    {
        return $this->user;
    }

    /**
     * The comment submitted with the deployment review
     */
    public function comment(): string
    {
        return $this->comment;
    }
}
