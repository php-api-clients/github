<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Actions\SetGithubActionsPermissionsOrganization\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["enabled_repositories"],"type":"object","properties":{"enabled_repositories":{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the repositories in the organization that are allowed to run GitHub Actions."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions and reusable workflows that are allowed to run."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled_repositories":"generated_enabled_repositories","allowed_actions":"generated_allowed_actions"}';
    /**
     * enabled_repositories: The policy that controls the repositories in the organization that are allowed to run GitHub Actions.
     * allowed_actions: The permissions policy that controls the actions and reusable workflows that are allowed to run.
     */
    public function __construct(public ?string $enabled_repositories, public string $allowed_actions)
    {
    }
}
