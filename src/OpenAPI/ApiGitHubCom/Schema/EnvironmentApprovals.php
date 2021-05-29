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
     *
     * @var array<Environments>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EnvironmentApprovals\Environments::class)
     */
    private array $environments = [];
    /**
     * Whether deployment to the environment(s) was approved or rejected
     */
    private ?string $state = null;
    /**
     * Simple User
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private ?SimpleUser $user = null;
    /**
     * The comment submitted with the deployment review
     */
    private ?string $comment = null;

    public function environments(): array
    {
        return $this->environments;
    }

    public function state(): ?string
    {
        return $this->state;
    }

    public function user(): ?SimpleUser
    {
        return $this->user;
    }

    public function comment(): ?string
    {
        return $this->comment;
    }
}
