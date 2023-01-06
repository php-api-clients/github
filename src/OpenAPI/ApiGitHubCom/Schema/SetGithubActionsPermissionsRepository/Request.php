<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetGithubActionsPermissionsRepository;

final class Request
{
    public const SCHEMA_JSON = '{"required":["enabled"],"type":"object","properties":{"enabled":{"type":"boolean","description":"Whether GitHub Actions is enabled on the repository."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions and reusable workflows that are allowed to run."}}}';
    public const SCHEMA_TITLE = 'SetGithubActionsPermissionsRepository\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Whether GitHub Actions is enabled on the repository.
     */
    private bool $enabled;
    /**
     * The permissions policy that controls the actions and reusable workflows that are allowed to run.
     */
    private ?string $allowed_actions = null;
    /**
     * Whether GitHub Actions is enabled on the repository.
     */
    public function enabled() : bool
    {
        return $this->enabled;
    }
    /**
     * The permissions policy that controls the actions and reusable workflows that are allowed to run.
     */
    public function allowed_actions() : ?string
    {
        return $this->allowed_actions;
    }
}
