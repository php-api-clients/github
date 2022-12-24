<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CAdbfd0Ea655Bbd7F7177227E8D4B88Bc
{
    public const SCHEMA_JSON = '{"required":["enabled_repositories"],"type":"object","properties":{"enabled_repositories":{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the repositories in the organization that are allowed to run GitHub Actions."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions that are allowed to run."}}}';
    public const SCHEMA_TITLE = 'c_adbfd0ea655bbd7f7177227e8d4b88bc';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The policy that controls the repositories in the organization that are allowed to run GitHub Actions.
     */
    private string $enabled_repositories;
    /**
     * The permissions policy that controls the actions that are allowed to run.
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
     * The permissions policy that controls the actions that are allowed to run.
     */
    public function allowed_actions() : ?string
    {
        return $this->allowed_actions;
    }
}
