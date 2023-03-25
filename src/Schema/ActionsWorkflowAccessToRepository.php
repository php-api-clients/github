<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ActionsWorkflowAccessToRepository
{
    public const SCHEMA_JSON = '{"required":["access_level"],"type":"object","properties":{"access_level":{"enum":["none","user","organization"],"type":"string","description":"Defines the level of access that workflows outside of the repository have to actions and reusable workflows within the\\nrepository.\\n\\n`none` means the access is only possible from workflows in this repository. `user` level access allows sharing across user owned private repos only. `organization` level access allows sharing across the organization."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"accessLevel":"none"}';
    /**
    * accessLevel: Defines the level of access that workflows outside of the repository have to actions and reusable workflows within the
    repository.
    
    `none` means the access is only possible from workflows in this repository. `user` level access allows sharing across user owned private repos only. `organization` level access allows sharing across the organization.
    */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('access_level')] public string $accessLevel)
    {
    }
}
