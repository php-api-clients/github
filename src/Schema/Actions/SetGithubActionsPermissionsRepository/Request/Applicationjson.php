<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Actions\SetGithubActionsPermissionsRepository\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["enabled"],"type":"object","properties":{"enabled":{"type":"boolean","description":"Whether GitHub Actions is enabled on the repository."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions and reusable workflows that are allowed to run."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false,"allowed_actions":"all"}';
    /**
     * enabled: Whether GitHub Actions is enabled on the repository.
     * allowedActions: The permissions policy that controls the actions and reusable workflows that are allowed to run.
     */
    public function __construct(public bool $enabled, #[\EventSauce\ObjectHydrator\MapFrom('allowed_actions')] public ?string $allowedActions)
    {
    }
}
