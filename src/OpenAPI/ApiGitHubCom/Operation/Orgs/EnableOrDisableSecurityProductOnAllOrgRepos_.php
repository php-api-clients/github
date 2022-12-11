<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class EnableOrDisableSecurityProductOnAllOrgRepos_
{
    private const OPERATION_ID = 'orgs/enable-or-disable-security-product-on-all-org-repos';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The security feature to enable or disable.**/
    private readonly string $security_product;
    /**The action to take.
    
    `enable_all` means to enable the specified security feature for all repositories in the organization.
    `disable_all` means to disable the specified security feature for all repositories in the organization.**/
    private readonly string $enablement;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, string $security_product, string $enablement)
    {
        $this->org = $org;
        $this->security_product = $security_product;
        $this->enablement = $enablement;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{org}', '{security_product}', '{enablement}'), array($this->org, $this->security_product, $this->enablement), '/orgs/{org}/{security_product}/{enablement}'));
    }
    function validateResponse()
    {
    }
}
