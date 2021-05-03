<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ActionsEnterprisePermissions
{
    public const SCHEMA_TITLE = 'actions-enterprise-permissions';
    public const SPL_HASH = '000000005f18240f00000000682da57f';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions. Can be one of: `all`, `none`, or `selected`.
     */
    private ?string $enabled_organizations = null;
    /**
     * The API URL to use to get or set the selected organizations that are allowed to run GitHub Actions, when `enabled_organizations` is set to `selected`.
     */
    private ?string $selected_organizations_url = null;
    /**
     * The permissions policy that controls the actions that are allowed to run. Can be one of: `all`, `local_only`, or `selected`.
     */
    private ?string $allowed_actions = null;
    /**
     * The API URL to use to get or set the actions that are allowed to run, when `allowed_actions` is set to `selected`.
     */
    private ?string $selected_actions_url = null;
    public function enabled_organizations() : ?string
    {
        return $this->enabled_organizations;
    }
    public function selected_organizations_url() : ?string
    {
        return $this->selected_organizations_url;
    }
    public function allowed_actions() : ?string
    {
        return $this->allowed_actions;
    }
    public function selected_actions_url() : ?string
    {
        return $this->selected_actions_url;
    }
}
