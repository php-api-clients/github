<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\MergeUpstream\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["branch"],"type":"object","properties":{"branch":{"type":"string","description":"The name of the branch which should be updated to match upstream."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"branch":"generated_branch_null"}';
    /**
     * branch: The name of the branch which should be updated to match upstream.
     */
    public function __construct(public string $branch)
    {
    }
}
