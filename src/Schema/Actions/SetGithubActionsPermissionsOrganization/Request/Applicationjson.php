<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Actions\SetGithubActionsPermissionsOrganization\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["enabled_repositories"],"type":"object","properties":{"enabled_repositories":{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the repositories in the organization that are allowed to run GitHub Actions."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions and reusable workflows that are allowed to run."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled_repositories":"all","allowed_actions":"all"}';
    /**
     * enabledRepositories: The policy that controls the repositories in the organization that are allowed to run GitHub Actions.
     * allowedActions: The permissions policy that controls the actions and reusable workflows that are allowed to run.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('enabled_repositories')] public string $enabledRepositories, #[\EventSauce\ObjectHydrator\MapFrom('allowed_actions')] public ?string $allowedActions)
    {
    }
}
