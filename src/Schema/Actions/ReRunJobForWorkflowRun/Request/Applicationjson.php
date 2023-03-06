<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Actions\ReRunJobForWorkflowRun\Request;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"enable_debug_logging":{"type":"boolean","description":"Whether to enable debug logging for the re-run.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enable_debug_logging":false}';
    /**
     * enable_debug_logging: Whether to enable debug logging for the re-run.
     */
    public function __construct(public ?bool $enable_debug_logging)
    {
    }
}
