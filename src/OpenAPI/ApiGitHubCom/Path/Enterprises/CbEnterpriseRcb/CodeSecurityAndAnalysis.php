<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb;

final class CodeSecurityAndAnalysis
{
    function get($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\GetSecurityAnalysisSettingsForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\GetSecurityAnalysisSettingsForEnterprise($enterprise);
    }
    function patch($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\PatchSecurityAnalysisSettingsForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\PatchSecurityAnalysisSettingsForEnterprise($enterprise);
    }
}
