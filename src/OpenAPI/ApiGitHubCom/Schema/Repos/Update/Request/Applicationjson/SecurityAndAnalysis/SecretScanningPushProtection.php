<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repos\Update\Request\Applicationjson\SecurityAndAnalysis;

final readonly class SecretScanningPushProtection
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"status":{"type":"string","description":"Can be `enabled` or `disabled`."}},"description":"Use the `status` property to enable or disable secret scanning push protection for this repository. For more information, see \\"[Protecting pushes with secret scanning](\\/code-security\\/secret-scanning\\/protecting-pushes-with-secret-scanning).\\""}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'Use the `status` property to enable or disable secret scanning push protection for this repository. For more information, see "[Protecting pushes with secret scanning](/code-security/secret-scanning/protecting-pushes-with-secret-scanning)."';
    /**
     * Can be `enabled` or `disabled`.
     */
    public ?string $status;

    public function __construct(string $status)
    {
        $this->status = $status;
    }
}
