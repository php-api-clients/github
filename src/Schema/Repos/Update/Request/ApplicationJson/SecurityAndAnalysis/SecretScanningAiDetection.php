<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis;

final readonly class SecretScanningAiDetection
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "status": {
            "type": "string",
            "description": "Can be `enabled` or `disabled`."
        }
    },
    "description": "Use the `status` property to enable or disable secret scanning AI detection for this repository. For more information, see \\"[Responsible detection of generic secrets with AI](https:\\/\\/docs.github.com\\/code-security\\/secret-scanning\\/using-advanced-secret-scanning-and-push-protection-features\\/generic-secret-detection\\/responsible-ai-generic-secrets).\\""
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Use the `status` property to enable or disable secret scanning AI detection for this repository. For more information, see "[Responsible detection of generic secrets with AI](https://docs.github.com/code-security/secret-scanning/using-advanced-secret-scanning-and-push-protection-features/generic-secret-detection/responsible-ai-generic-secrets)."';
    public const SCHEMA_EXAMPLE_DATA = '{
    "status": "generated"
}';

    /**
     * status: Can be `enabled` or `disabled`.
     */
    public function __construct(public string|null $status)
    {
    }
}
