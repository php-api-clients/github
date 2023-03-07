<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\CreateFork\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"organization":{"type":"string","description":"Optional parameter to specify the organization name if forking into an organization."},"name":{"type":"string","description":"When forking from an existing repository, a new name for the fork."},"default_branch_only":{"type":"boolean","description":"When forking from an existing repository, fork with only the default branch."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"organization":"generated_organization","name":"generated_name","default_branch_only":false}';
    /**
     * organization: Optional parameter to specify the organization name if forking into an organization.
     * name: When forking from an existing repository, a new name for the fork.
     * default_branch_only: When forking from an existing repository, fork with only the default branch.
     */
    public function __construct(public ?string $organization, public ?string $name, public ?bool $default_branch_only)
    {
    }
}
