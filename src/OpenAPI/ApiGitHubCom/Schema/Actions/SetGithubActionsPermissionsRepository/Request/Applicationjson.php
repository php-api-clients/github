<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Actions\SetGithubActionsPermissionsRepository\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["enabled"],"type":"object","properties":{"enabled":{"type":"boolean","description":"Whether GitHub Actions is enabled on the repository."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions and reusable workflows that are allowed to run."}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Whether GitHub Actions is enabled on the repository.
     */
    public ?bool $enabled;
    /**
     * The permissions policy that controls the actions and reusable workflows that are allowed to run.
     */
    public string $allowed_actions;

    public function __construct(bool $enabled, string $allowed_actions)
    {
        $this->enabled         = $enabled;
        $this->allowed_actions = $allowed_actions;
    }
}
