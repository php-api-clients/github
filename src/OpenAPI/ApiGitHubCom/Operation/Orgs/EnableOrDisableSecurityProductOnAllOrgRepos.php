<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class EnableOrDisableSecurityProductOnAllOrgRepos
{
    public const OPERATION_ID = 'orgs/enable-or-disable-security-product-on-all-org-repos';
    public const OPERATION_MATCH = 'POST /orgs/{org}/{security_product}/{enablement}';
    private const METHOD = 'POST';
    private const PATH = '/orgs/{org}/{security_product}/{enablement}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The security feature to enable or disable.**/
    private string $security_product;
    /**The action to take.
    
    `enable_all` means to enable the specified security feature for all repositories in the organization.
    `disable_all` means to disable the specified security feature for all repositories in the organization.**/
    private string $enablement;
    public function __construct(string $org, string $security_product, string $enablement)
    {
        $this->org = $org;
        $this->security_product = $security_product;
        $this->enablement = $enablement;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{security_product}', '{enablement}'), array($this->org, $this->security_product, $this->enablement), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
