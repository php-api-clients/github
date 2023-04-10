<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\Update\Request\Applicationjson\SecurityAndAnalysis;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class SecretScanning
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"status":{"type":"string","description":"Can be `enabled` or `disabled`."}},"description":"Use the `status` property to enable or disable secret scanning for this repository. For more information, see \\"[About secret scanning](\\/code-security\\/secret-security\\/about-secret-scanning).\\""}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Use the `status` property to enable or disable secret scanning for this repository. For more information, see "[About secret scanning](/code-security/secret-security/about-secret-scanning)."';
    public const SCHEMA_EXAMPLE_DATA = '{"status":"generated_status_null"}';
    /**
     * status: Can be `enabled` or `disabled`.
     */
    public function __construct(public ?string $status)
    {
    }
}
