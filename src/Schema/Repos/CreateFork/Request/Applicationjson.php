<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\CreateFork\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
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
