<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetGithubActionsPermissionsOrganization\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["enabled_repositories"],"type":"object","properties":{"enabled_repositories":{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the repositories in the organization that are allowed to run GitHub Actions."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions and reusable workflows that are allowed to run."}}}';
    public const SCHEMA_TITLE = 'SetGithubActionsPermissionsOrganization\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The policy that controls the repositories in the organization that are allowed to run GitHub Actions.
     */
    private string $enabled_repositories;
    /**
     * The permissions policy that controls the actions and reusable workflows that are allowed to run.
     */
    private ?string $allowed_actions = null;
    /**
     * The policy that controls the repositories in the organization that are allowed to run GitHub Actions.
     */
    public function enabled_repositories() : string
    {
        return $this->enabled_repositories;
    }
    /**
     * The permissions policy that controls the actions and reusable workflows that are allowed to run.
     */
    public function allowed_actions() : ?string
    {
        return $this->allowed_actions;
    }
}
