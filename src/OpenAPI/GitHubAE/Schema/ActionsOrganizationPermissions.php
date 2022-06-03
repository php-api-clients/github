<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ActionsOrganizationPermissions
{
    public const SCHEMA_TITLE = 'actions-organization-permissions';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The policy that controls the repositories in the organization that are allowed to run GitHub Actions.
     */
    private string $enabled_repositories;
    /**
     * The API URL to use to get or set the selected repositories that are allowed to run GitHub Actions, when `enabled_repositories` is set to `selected`.
     */
    private ?string $selected_repositories_url = null;
    /**
     * The permissions policy that controls the actions that are allowed to run.
     */
    private ?string $allowed_actions = null;
    /**
     * The API URL to use to get or set the actions that are allowed to run, when `allowed_actions` is set to `selected`.
     */
    private ?string $selected_actions_url = null;
    /**
     * The policy that controls the repositories in the organization that are allowed to run GitHub Actions.
     */
    public function enabled_repositories() : string
    {
        return $this->enabled_repositories;
    }
    /**
     * The API URL to use to get or set the selected repositories that are allowed to run GitHub Actions, when `enabled_repositories` is set to `selected`.
     */
    public function selected_repositories_url() : ?string
    {
        return $this->selected_repositories_url;
    }
    /**
     * The permissions policy that controls the actions that are allowed to run.
     */
    public function allowed_actions() : ?string
    {
        return $this->allowed_actions;
    }
    /**
     * The API URL to use to get or set the actions that are allowed to run, when `allowed_actions` is set to `selected`.
     */
    public function selected_actions_url() : ?string
    {
        return $this->selected_actions_url;
    }
}
