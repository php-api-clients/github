<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\Update\Request\Applicationjson\SecurityAndAnalysis;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
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
