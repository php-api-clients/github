<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\Update\Request\ApplicationJson;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class SecurityAndAnalysis
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "advanced_security": {
            "type": "object",
            "properties": {
                "status": {
                    "type": "string",
                    "description": "Can be `enabled` or `disabled`."
                }
            },
            "description": "Use the `status` property to enable or disable GitHub Advanced Security for this repository. For more information, see \\"[About GitHub Advanced Security](\\/github\\/getting-started-with-github\\/learning-about-github\\/about-github-advanced-security).\\""
        },
        "secret_scanning": {
            "type": "object",
            "properties": {
                "status": {
                    "type": "string",
                    "description": "Can be `enabled` or `disabled`."
                }
            },
            "description": "Use the `status` property to enable or disable secret scanning for this repository. For more information, see \\"[About secret scanning](\\/code-security\\/secret-security\\/about-secret-scanning).\\""
        },
        "secret_scanning_push_protection": {
            "type": "object",
            "properties": {
                "status": {
                    "type": "string",
                    "description": "Can be `enabled` or `disabled`."
                }
            },
            "description": "Use the `status` property to enable or disable secret scanning push protection for this repository. For more information, see \\"[Protecting pushes with secret scanning](\\/code-security\\/secret-scanning\\/protecting-pushes-with-secret-scanning).\\""
        },
        "secret_scanning_ai_detection": {
            "type": "object",
            "properties": {
                "status": {
                    "type": "string",
                    "description": "Can be `enabled` or `disabled`."
                }
            },
            "description": "Use the `status` property to enable or disable secret scanning AI detection for this repository. For more information, see \\"[Responsible detection of generic secrets with AI](https:\\/\\/docs.github.com\\/code-security\\/secret-scanning\\/using-advanced-secret-scanning-and-push-protection-features\\/generic-secret-detection\\/responsible-ai-generic-secrets).\\""
        },
        "secret_scanning_non_provider_patterns": {
            "type": "object",
            "properties": {
                "status": {
                    "type": "string",
                    "description": "Can be `enabled` or `disabled`."
                }
            },
            "description": "Use the `status` property to enable or disable secret scanning non-provider patterns for this repository. For more information, see \\"[Supported secret scanning patterns](\\/code-security\\/secret-scanning\\/introduction\\/supported-secret-scanning-patterns#supported-secrets).\\""
        }
    },
    "description": "Specify which security and analysis features to enable or disable for the repository.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nFor example, to enable GitHub Advanced Security, use this data in the body of the `PATCH` request:\\n`{ \\"security_and_analysis\\": {\\"advanced_security\\": { \\"status\\": \\"enabled\\" } } }`.\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/repos\\/{owner}\\/{repo}` request."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Specify which security and analysis features to enable or disable for the repository.

To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."

For example, to enable GitHub Advanced Security, use this data in the body of the `PATCH` request:
`{ "security_and_analysis": {"advanced_security": { "status": "enabled" } } }`.

You can check which security and analysis features are currently enabled by using a `GET /repos/{owner}/{repo}` request.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "advanced_security": {
        "status": "generated"
    },
    "secret_scanning": {
        "status": "generated"
    },
    "secret_scanning_push_protection": {
        "status": "generated"
    },
    "secret_scanning_ai_detection": {
        "status": "generated"
    },
    "secret_scanning_non_provider_patterns": {
        "status": "generated"
    }
}';

    /**
     * advancedSecurity: Use the `status` property to enable or disable GitHub Advanced Security for this repository. For more information, see "[About GitHub Advanced Security](/github/getting-started-with-github/learning-about-github/about-github-advanced-security)."
     * secretScanning: Use the `status` property to enable or disable secret scanning for this repository. For more information, see "[About secret scanning](/code-security/secret-security/about-secret-scanning)."
     * secretScanningPushProtection: Use the `status` property to enable or disable secret scanning push protection for this repository. For more information, see "[Protecting pushes with secret scanning](/code-security/secret-scanning/protecting-pushes-with-secret-scanning)."
     * secretScanningAiDetection: Use the `status` property to enable or disable secret scanning AI detection for this repository. For more information, see "[Responsible detection of generic secrets with AI](https://docs.github.com/code-security/secret-scanning/using-advanced-secret-scanning-and-push-protection-features/generic-secret-detection/responsible-ai-generic-secrets)."
     * secretScanningNonProviderPatterns: Use the `status` property to enable or disable secret scanning non-provider patterns for this repository. For more information, see "[Supported secret scanning patterns](/code-security/secret-scanning/introduction/supported-secret-scanning-patterns#supported-secrets)."
     */
    public function __construct(#[MapFrom('advanced_security')]
    public Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis\AdvancedSecurity|null $advancedSecurity, #[MapFrom('secret_scanning')]
    public Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis\SecretScanning|null $secretScanning, #[MapFrom('secret_scanning_push_protection')]
    public Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis\SecretScanningPushProtection|null $secretScanningPushProtection, #[MapFrom('secret_scanning_ai_detection')]
    public Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis\SecretScanningAiDetection|null $secretScanningAiDetection, #[MapFrom('secret_scanning_non_provider_patterns')]
    public Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis\SecretScanningNonProviderPatterns|null $secretScanningNonProviderPatterns,)
    {
    }
}
