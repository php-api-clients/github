<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\CreateFork\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"organization":{"type":"string","description":"Optional parameter to specify the organization name if forking into an organization."},"name":{"type":"string","description":"When forking from an existing repository, a new name for the fork."},"default_branch_only":{"type":"boolean","description":"When forking from an existing repository, fork with only the default branch."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"organization":"generated_organization_null","name":"generated_name_null","default_branch_only":false}';
    /**
     * organization: Optional parameter to specify the organization name if forking into an organization.
     * name: When forking from an existing repository, a new name for the fork.
     * defaultBranchOnly: When forking from an existing repository, fork with only the default branch.
     */
    public function __construct(public ?string $organization, public ?string $name, #[\EventSauce\ObjectHydrator\MapFrom('default_branch_only')] public ?bool $defaultBranchOnly)
    {
    }
}
