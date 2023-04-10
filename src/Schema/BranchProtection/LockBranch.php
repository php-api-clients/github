<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\BranchProtection;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class LockBranch
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean","default":false}},"description":"Whether to set the branch as read-only. If this is true, users will not be able to push to the branch."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Whether to set the branch as read-only. If this is true, users will not be able to push to the branch.';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false}';
    public function __construct(public ?bool $enabled)
    {
    }
}
