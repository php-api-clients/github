<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Windows
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_ms":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_ms":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_ms')] public ?int $totalMs)
    {
    }
}
