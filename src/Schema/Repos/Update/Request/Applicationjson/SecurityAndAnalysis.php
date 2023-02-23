<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\Update\Request\Applicationjson;

final readonly class SecurityAndAnalysis
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"advanced_security":{"type":"object","properties":{"status":{"type":"string","description":"Can be `enabled` or `disabled`."}},"description":"Use the `status` property to enable or disable GitHub Advanced Security for this repository. For more information, see \\"[About GitHub Advanced Security](\\/github\\/getting-started-with-github\\/learning-about-github\\/about-github-advanced-security).\\""},"secret_scanning":{"type":"object","properties":{"status":{"type":"string","description":"Can be `enabled` or `disabled`."}},"description":"Use the `status` property to enable or disable secret scanning for this repository. For more information, see \\"[About secret scanning](\\/code-security\\/secret-security\\/about-secret-scanning).\\""},"secret_scanning_push_protection":{"type":"object","properties":{"status":{"type":"string","description":"Can be `enabled` or `disabled`."}},"description":"Use the `status` property to enable or disable secret scanning push protection for this repository. For more information, see \\"[Protecting pushes with secret scanning](\\/code-security\\/secret-scanning\\/protecting-pushes-with-secret-scanning).\\""}},"description":"Specify which security and analysis features to enable or disable for the repository.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nFor example, to enable GitHub Advanced Security, use this data in the body of the `PATCH` request:\\n`{ \\"security_and_analysis\\": {\\"advanced_security\\": { \\"status\\": \\"enabled\\" } } }`.\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/repos\\/{owner}\\/{repo}` request."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Specify which security and analysis features to enable or disable for the repository.

To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."

For example, to enable GitHub Advanced Security, use this data in the body of the `PATCH` request:
`{ "security_and_analysis": {"advanced_security": { "status": "enabled" } } }`.

You can check which security and analysis features are currently enabled by using a `GET /repos/{owner}/{repo}` request.';
    /**
     * Use the `status` property to enable or disable GitHub Advanced Security for this repository. For more information, see "[About GitHub Advanced Security](/github/getting-started-with-github/learning-about-github/about-github-advanced-security)."
     */
    public ?\ApiClients\Client\Github\Schema\Repos\Update\Request\Applicationjson\SecurityAndAnalysis\AdvancedSecurity $advanced_security;
    /**
     * Use the `status` property to enable or disable secret scanning for this repository. For more information, see "[About secret scanning](/code-security/secret-security/about-secret-scanning)."
     */
    public ?\ApiClients\Client\Github\Schema\Repos\Update\Request\Applicationjson\SecurityAndAnalysis\SecretScanning $secret_scanning;
    /**
     * Use the `status` property to enable or disable secret scanning push protection for this repository. For more information, see "[Protecting pushes with secret scanning](/code-security/secret-scanning/protecting-pushes-with-secret-scanning)."
     */
    public ?\ApiClients\Client\Github\Schema\Repos\Update\Request\Applicationjson\SecurityAndAnalysis\SecretScanningPushProtection $secret_scanning_push_protection;
    public function __construct(\ApiClients\Client\Github\Schema\Repos\Update\Request\Applicationjson\SecurityAndAnalysis\AdvancedSecurity $advanced_security, \ApiClients\Client\Github\Schema\Repos\Update\Request\Applicationjson\SecurityAndAnalysis\SecretScanning $secret_scanning, \ApiClients\Client\Github\Schema\Repos\Update\Request\Applicationjson\SecurityAndAnalysis\SecretScanningPushProtection $secret_scanning_push_protection)
    {
        $this->advanced_security = $advanced_security;
        $this->secret_scanning = $secret_scanning;
        $this->secret_scanning_push_protection = $secret_scanning_push_protection;
    }
}
