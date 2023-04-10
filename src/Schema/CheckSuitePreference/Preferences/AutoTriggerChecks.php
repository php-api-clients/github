<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\CheckSuitePreference\Preferences;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class AutoTriggerChecks
{
    public const SCHEMA_JSON = '{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer"},"setting":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"app_id":13,"setting":false}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('app_id')] public int $appId, public bool $setting)
    {
    }
}
