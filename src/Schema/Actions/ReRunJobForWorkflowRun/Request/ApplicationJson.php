<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Actions\ReRunJobForWorkflowRun\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"properties":{"enable_debug_logging":{"type":"boolean","description":"Whether to enable debug logging for the re-run.","default":false}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enable_debug_logging":false}';

    /**
     * enableDebugLogging: Whether to enable debug logging for the re-run.
     */
    public function __construct(#[MapFrom('enable_debug_logging')] public ?bool $enableDebugLogging)
    {
    }
}
