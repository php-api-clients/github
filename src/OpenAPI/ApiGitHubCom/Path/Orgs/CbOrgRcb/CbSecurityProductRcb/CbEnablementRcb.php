<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\CbSecurityProductRcb;

final class CbEnablementRcb
{
    function post($org, $security_product, $enablement) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos($org, $security_product, $enablement);
    }
}
