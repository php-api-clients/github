<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ActionsRepositoryPermissions
{
    public const SCHEMA_TITLE = 'actions-repository-permissions';
    public const SPL_HASH = '000000001f1e243f000000004be6709d';
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
    public function enabled() : bool
    {
        return $this->enabled;
    }
    public function allowed_actions() : string
    {
        return $this->allowed_actions;
    }
    public function selected_actions_url() : string
    {
        return $this->selected_actions_url;
    }
}
