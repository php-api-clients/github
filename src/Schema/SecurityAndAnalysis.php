<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class SecurityAndAnalysis
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"advanced_security":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning_push_protection":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"advanced_security":{"status":"enabled"},"secret_scanning":{"status":"enabled"},"secret_scanning_push_protection":{"status":"enabled"}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('advanced_security')] public ?Schema\SecurityAndAnalysis\AdvancedSecurity $advancedSecurity, #[\EventSauce\ObjectHydrator\MapFrom('secret_scanning')] public ?Schema\SecurityAndAnalysis\SecretScanning $secretScanning, #[\EventSauce\ObjectHydrator\MapFrom('secret_scanning_push_protection')] public ?Schema\SecurityAndAnalysis\SecretScanningPushProtection $secretScanningPushProtection)
    {
    }
}
