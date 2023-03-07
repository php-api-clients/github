<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\ProtectedBranch;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class LockBranch
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean","default":false}},"description":"Whether to set the branch as read-only. If this is true, users will not be able to push to the branch.","additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Whether to set the branch as read-only. If this is true, users will not be able to push to the branch.';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false}';
    public function __construct(public ?bool $enabled)
    {
    }
}
