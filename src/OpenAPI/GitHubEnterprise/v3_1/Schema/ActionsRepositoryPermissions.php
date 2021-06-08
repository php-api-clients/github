<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class ActionsRepositoryPermissions
{
    public const SCHEMA_TITLE       = 'actions-repository-permissions';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Whether GitHub Actions is enabled on the repository.
     */
    private bool $enabled;
    /**
     * The permissions policy that controls the actions that are allowed to run. Can be one of: `all`, `local_only`, or `selected`.
     */
    private string $allowed_actions;
    /**
     * The API URL to use to get or set the actions that are allowed to run, when `allowed_actions` is set to `selected`.
     */
    private string $selected_actions_url;

    /**
     * Whether GitHub Actions is enabled on the repository.
     */
    public function enabled(): bool
    {
        return $this->enabled;
    }

    /**
     * The permissions policy that controls the actions that are allowed to run. Can be one of: `all`, `local_only`, or `selected`.
     */
    public function allowed_actions(): string
    {
        return $this->allowed_actions;
    }

    /**
     * The API URL to use to get or set the actions that are allowed to run, when `allowed_actions` is set to `selected`.
     */
    public function selected_actions_url(): string
    {
        return $this->selected_actions_url;
    }
}
