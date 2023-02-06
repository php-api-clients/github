<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsOrganizationPermissions
{
    public const SCHEMA_JSON = '{"required":["enabled_repositories"],"type":"object","properties":{"enabled_repositories":{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the repositories in the organization that are allowed to run GitHub Actions."},"selected_repositories_url":{"type":"string","description":"The API URL to use to get or set the selected repositories that are allowed to run GitHub Actions, when `enabled_repositories` is set to `selected`."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions and reusable workflows that are allowed to run."},"selected_actions_url":{"type":"string","description":"The API URL to use to get or set the actions and reusable workflows that are allowed to run, when `allowed_actions` is set to `selected`."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'actions-organization-permissions';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The policy that controls the repositories in the organization that are allowed to run GitHub Actions.
     */
    public readonly string $enabled_repositories;
    /**
     * The API URL to use to get or set the selected repositories that are allowed to run GitHub Actions, when `enabled_repositories` is set to `selected`.
     */
    public readonly ?string $selected_repositories_url;
    /**
     * The permissions policy that controls the actions and reusable workflows that are allowed to run.
     */
    public readonly ?string $allowed_actions;
    /**
     * The API URL to use to get or set the actions and reusable workflows that are allowed to run, when `allowed_actions` is set to `selected`.
     */
    public readonly ?string $selected_actions_url;
    public function __construct(string $enabled_repositories, string $selected_repositories_url, string $allowed_actions, string $selected_actions_url)
    {
        $this->enabled_repositories = $enabled_repositories;
        $this->selected_repositories_url = $selected_repositories_url;
        $this->allowed_actions = $allowed_actions;
        $this->selected_actions_url = $selected_actions_url;
    }
}
