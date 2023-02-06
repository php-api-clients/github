<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetGithubActionsPermissionsRepository\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["enabled"],"type":"object","properties":{"enabled":{"type":"boolean","description":"Whether GitHub Actions is enabled on the repository."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions and reusable workflows that are allowed to run."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'SetGithubActionsPermissionsRepository\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Whether GitHub Actions is enabled on the repository.
     */
    public readonly bool $enabled;
    /**
     * The permissions policy that controls the actions and reusable workflows that are allowed to run.
     */
    public readonly ?string $allowed_actions;
    public function __construct(bool $enabled, string $allowed_actions)
    {
        $this->enabled = $enabled;
        $this->allowed_actions = $allowed_actions;
    }
}
