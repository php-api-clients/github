<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstractd2a759130388e4e1cc684aa946754f39
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"enable_debug_logging":{"type":"boolean","description":"Whether to enable debug logging for the re-run.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enable_debug_logging":false}';
    /**
     * enableDebugLogging: Whether to enable debug logging for the re-run.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('enable_debug_logging')] public ?bool $enableDebugLogging)
    {
    }
}
