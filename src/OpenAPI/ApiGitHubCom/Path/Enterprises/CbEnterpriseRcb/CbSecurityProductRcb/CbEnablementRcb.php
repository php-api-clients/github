<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\CbSecurityProductRcb;

final class CbEnablementRcb
{
    function post($enterprise, $security_product, $enablement) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\PostSecurityProductEnablementForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\PostSecurityProductEnablementForEnterprise($enterprise, $security_product, $enablement);
    }
}
