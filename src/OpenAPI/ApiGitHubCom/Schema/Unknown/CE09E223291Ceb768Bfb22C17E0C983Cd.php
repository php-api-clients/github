<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CE09E223291Ceb768Bfb22C17E0C983Cd
{
    public const SCHEMA_JSON = '{"required":["enabled_repositories"],"type":"object","properties":{"enabled_repositories":{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the repositories in the organization that are allowed to run GitHub Actions."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions and reusable workflows that are allowed to run."}}}';
    public const SCHEMA_TITLE = 'c_e09e223291ceb768bfb22c17e0c983cd';
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
