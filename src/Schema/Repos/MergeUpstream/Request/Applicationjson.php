<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\MergeUpstream\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
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
