<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsRepositoryPermissions
{
    public const SCHEMA_JSON = '{"required":["enabled"],"type":"object","properties":{"enabled":{"type":"boolean","description":"Whether GitHub Actions is enabled on the repository."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions and reusable workflows that are allowed to run."},"selected_actions_url":{"type":"string","description":"The API URL to use to get or set the actions and reusable workflows that are allowed to run, when `allowed_actions` is set to `selected`."}}}';
    public const SCHEMA_TITLE = 'actions-repository-permissions';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Whether GitHub Actions is enabled on the repository.
     */
    public readonly bool $enabled;
    /**
     * The permissions policy that controls the actions and reusable workflows that are allowed to run.
     */
    public readonly ?string $allowed_actions;
    /**
     * The API URL to use to get or set the actions and reusable workflows that are allowed to run, when `allowed_actions` is set to `selected`.
     */
    public readonly ?string $selected_actions_url;
    public function __construct(bool $enabled, string $allowed_actions, string $selected_actions_url)
    {
        $this->enabled = $enabled;
        $this->allowed_actions = $allowed_actions;
        $this->selected_actions_url = $selected_actions_url;
    }
}
