<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WorkflowUsage;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Billable
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"UBUNTU":{"type":"object","properties":{"total_ms":{"type":"integer"}}},"MACOS":{"type":"object","properties":{"total_ms":{"type":"integer"}}},"WINDOWS":{"type":"object","properties":{"total_ms":{"type":"integer"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ubuntu":{"totalMs":13},"macos":{"totalMs":13},"windows":{"totalMs":13}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('UBUNTU')] public ?Schema\WorkflowUsage\Billable\Ubuntu $ubuntu, #[\EventSauce\ObjectHydrator\MapFrom('MACOS')] public ?Schema\WorkflowUsage\Billable\Ubuntu $macos, #[\EventSauce\ObjectHydrator\MapFrom('WINDOWS')] public ?Schema\WorkflowUsage\Billable\Ubuntu $windows)
    {
    }
}
