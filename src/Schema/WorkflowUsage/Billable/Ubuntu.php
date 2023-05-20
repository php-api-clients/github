<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ubuntu
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"total_ms":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_ms":8}';

    public function __construct(#[MapFrom('total_ms')] public ?int $totalMs)
    {
    }
}
