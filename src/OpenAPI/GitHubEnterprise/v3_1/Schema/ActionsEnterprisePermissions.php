<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class ActionsEnterprisePermissions
{
    public const SCHEMA_TITLE = 'actions-enterprise-permissions';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions.
     */
    private string $enabled_organizations;
    /**
     * The API URL to use to get or set the selected organizations that are allowed to run GitHub Actions, when `enabled_organizations` is set to `selected`.
     */
    private ?string $selected_organizations_url = null;
    /**
     * The permissions policy that controls the actions that are allowed to run.
     */
    private ?string $allowed_actions = null;
    /**
     * The API URL to use to get or set the actions that are allowed to run, when `allowed_actions` is set to `selected`.
     */
    private ?string $selected_actions_url = null;
    /**
     * The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions.
     */
    public function enabled_organizations() : string
    {
        return $this->enabled_organizations;
    }
    /**
     * The API URL to use to get or set the selected organizations that are allowed to run GitHub Actions, when `enabled_organizations` is set to `selected`.
     */
    public function selected_organizations_url() : ?string
    {
        return $this->selected_organizations_url;
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
