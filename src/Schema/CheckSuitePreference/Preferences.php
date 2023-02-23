<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\CheckSuitePreference;

final readonly class Preferences
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"auto_trigger_checks":{"type":"array","items":{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer"},"setting":{"type":"boolean"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?array $auto_trigger_checks;
    public function __construct(array $auto_trigger_checks)
    {
        $this->auto_trigger_checks = $auto_trigger_checks;
    }
}
