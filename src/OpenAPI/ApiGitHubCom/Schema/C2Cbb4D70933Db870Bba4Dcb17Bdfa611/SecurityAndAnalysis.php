<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C2Cbb4D70933Db870Bba4Dcb17Bdfa611;

final class SecurityAndAnalysis
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"advanced_security":{"type":"object","properties":{"status":{"type":"string","description":"Can be `enabled` or `disabled`."}},"description":"Use the `status` property to enable or disable GitHub Advanced Security for this repository. For more information, see \\"[About GitHub Advanced Security](\\/github\\/getting-started-with-github\\/learning-about-github\\/about-github-advanced-security).\\""},"secret_scanning":{"type":"object","properties":{"status":{"type":"string","description":"Can be `enabled` or `disabled`."}},"description":"Use the `status` property to enable or disable secret scanning for this repository. For more information, see \\"[About secret scanning](\\/code-security\\/secret-security\\/about-secret-scanning).\\""},"secret_scanning_push_protection":{"type":"object","properties":{"status":{"type":"string","description":"Can be `enabled` or `disabled`."}},"description":"Use the `status` property to enable or disable secret scanning push protection for this repository. For more information, see \\"[Protecting pushes with secret scanning](\\/code-security\\/secret-scanning\\/protecting-pushes-with-secret-scanning).\\""}},"description":"Specify which security and analysis features to enable or disable for the repository.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nFor example, to enable GitHub Advanced Security, use this data in the body of the `PATCH` request:\\n`{ \\"security_and_analysis\\": {\\"advanced_security\\": { \\"status\\": \\"enabled\\" } } }`.\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/repos\\/{owner}\\/{repo}` request."}';
    public const SCHEMA_TITLE = 'C2Cbb4D70933Db870Bba4Dcb17Bdfa611\\SecurityAndAnalysis';
    public const SCHEMA_DESCRIPTION = 'Specify which security and analysis features to enable or disable for the repository.

To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."

For example, to enable GitHub Advanced Security, use this data in the body of the `PATCH` request:
`{ "security_and_analysis": {"advanced_security": { "status": "enabled" } } }`.

You can check which security and analysis features are currently enabled by using a `GET /repos/{owner}/{repo}` request.';
    /**
     * Use the `status` property to enable or disable GitHub Advanced Security for this repository. For more information, see "[About GitHub Advanced Security](/github/getting-started-with-github/learning-about-github/about-github-advanced-security)."
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\AdvancedSecurity::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\AdvancedSecurity $advanced_security;
    /**
     * Use the `status` property to enable or disable secret scanning for this repository. For more information, see "[About secret scanning](/code-security/secret-security/about-secret-scanning)."
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\SecretScanning::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\SecretScanning $secret_scanning;
    /**
     * Use the `status` property to enable or disable secret scanning push protection for this repository. For more information, see "[Protecting pushes with secret scanning](/code-security/secret-scanning/protecting-pushes-with-secret-scanning)."
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\SecretScanningPushProtection::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\SecretScanningPushProtection $secret_scanning_push_protection;
    /**
     * Use the `status` property to enable or disable GitHub Advanced Security for this repository. For more information, see "[About GitHub Advanced Security](/github/getting-started-with-github/learning-about-github/about-github-advanced-security)."
     */
    public function advanced_security() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\AdvancedSecurity
    {
        return $this->advanced_security;
    }
    /**
     * Use the `status` property to enable or disable secret scanning for this repository. For more information, see "[About secret scanning](/code-security/secret-security/about-secret-scanning)."
     */
    public function secret_scanning() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\SecretScanning
    {
        return $this->secret_scanning;
    }
    /**
     * Use the `status` property to enable or disable secret scanning push protection for this repository. For more information, see "[Protecting pushes with secret scanning](/code-security/secret-scanning/protecting-pushes-with-secret-scanning)."
     */
    public function secret_scanning_push_protection() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\SecretScanningPushProtection
    {
        return $this->secret_scanning_push_protection;
    }
}