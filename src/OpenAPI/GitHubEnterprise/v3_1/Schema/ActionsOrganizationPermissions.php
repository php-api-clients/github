<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class ActionsOrganizationPermissions
{
    public const SCHEMA_TITLE       = 'actions-organization-permissions';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The policy that controls the repositories in the organization that are allowed to run GitHub Actions. Can be one of: `all`, `none`, or `selected`.
     */
    private ?string $enabled_repositories = null;
    /**
     * The API URL to use to get or set the selected repositories that are allowed to run GitHub Actions, when `enabled_repositories` is set to `selected`.
     */
    private ?string $selected_repositories_url = null;
    /**
     * The permissions policy that controls the actions that are allowed to run. Can be one of: `all`, `local_only`, or `selected`.
     */
    private ?string $allowed_actions = null;
    /**
     * The API URL to use to get or set the actions that are allowed to run, when `allowed_actions` is set to `selected`.
     */
    private ?string $selected_actions_url = null;

    /**
     * The policy that controls the repositories in the organization that are allowed to run GitHub Actions. Can be one of: `all`, `none`, or `selected`.
     */
    public function enabled_repositories(): ?string
    {
        return $this->enabled_repositories;
    }

    /**
     * The API URL to use to get or set the selected repositories that are allowed to run GitHub Actions, when `enabled_repositories` is set to `selected`.
     */
    public function selected_repositories_url(): ?string
    {
        return $this->selected_repositories_url;
    }

    /**
     * The permissions policy that controls the actions that are allowed to run. Can be one of: `all`, `local_only`, or `selected`.
     */
    public function allowed_actions(): ?string
    {
        return $this->allowed_actions;
    }

    /**
     * The API URL to use to get or set the actions that are allowed to run, when `allowed_actions` is set to `selected`.
     */
    public function selected_actions_url(): ?string
    {
        return $this->selected_actions_url;
    }
}
