<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Orgs;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class EnableOrDisableSecurityProductOnAllOrgRepos
{
    public const OPERATION_ID = 'orgs/enable-or-disable-security-product-on-all-org-repos';
    public const OPERATION_MATCH = 'POST /orgs/{org}/{security_product}/{enablement}';
    private const METHOD = 'POST';
    private const PATH = '/orgs/{org}/{security_product}/{enablement}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The security feature to enable or disable.**/
    private string $securityProduct;
    /**The action to take.
    
    `enable_all` means to enable the specified security feature for all repositories in the organization.
    `disable_all` means to disable the specified security feature for all repositories in the organization.**/
    private string $enablement;
    public function __construct(string $org, string $securityProduct, string $enablement)
    {
        $this->org = $org;
        $this->securityProduct = $securityProduct;
        $this->enablement = $enablement;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{security_product}', '{enablement}'), array($this->org, $this->securityProduct, $this->enablement), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
