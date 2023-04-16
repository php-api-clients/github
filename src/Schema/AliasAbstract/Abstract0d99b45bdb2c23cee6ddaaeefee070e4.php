<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstract0d99b45bdb2c23cee6ddaaeefee070e4
{
    public const SCHEMA_JSON         = '{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"job_id":13,"duration_ms":13}';

    public function __construct(#[MapFrom('job_id')] public int $jobId, #[MapFrom('duration_ms')] public int $durationMs)
    {
    }
}
