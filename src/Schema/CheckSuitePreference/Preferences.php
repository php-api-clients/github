<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CheckSuitePreference;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Preferences
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"auto_trigger_checks":{"type":"array","items":{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer"},"setting":{"type":"boolean"}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"auto_trigger_checks":[{"app_id":6,"setting":false},{"app_id":6,"setting":false}]}';

    public function __construct(#[MapFrom('auto_trigger_checks')]
    public array|null $autoTriggerChecks,)
    {
    }
}
