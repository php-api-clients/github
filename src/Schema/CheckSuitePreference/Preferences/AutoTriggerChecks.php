<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CheckSuitePreference\Preferences;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class AutoTriggerChecks
{
    public const SCHEMA_JSON         = '{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer"},"setting":{"type":"boolean"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"app_id":6,"setting":false}';

    public function __construct(#[MapFrom('app_id')]
    public int $appId, public bool $setting,)
    {
    }
}
