<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\CreateFork\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"properties":{"organization":{"type":"string","description":"Optional parameter to specify the organization name if forking into an organization."},"name":{"type":"string","description":"When forking from an existing repository, a new name for the fork."},"default_branch_only":{"type":"boolean","description":"When forking from an existing repository, fork with only the default branch."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"organization":"generated","name":"generated","default_branch_only":false}';

    /**
     * organization: Optional parameter to specify the organization name if forking into an organization.
     * name: When forking from an existing repository, a new name for the fork.
     * defaultBranchOnly: When forking from an existing repository, fork with only the default branch.
     */
    public function __construct(public string|null $organization, public string|null $name, #[MapFrom('default_branch_only')]
    public bool|null $defaultBranchOnly,)
    {
    }
}
