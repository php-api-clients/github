<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing;

final class GetGithubPackagesBillingGhe
{
    private const OPERATION_ID = 'billing/get-github-packages-billing-ghe';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($enterprise)
    {
        $this->enterprise = $enterprise;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{enterprise}'), array($this->enterprise), '/enterprises/{enterprise}/settings/billing/packages?'));
    }
    function validateResponse()
    {
    }
}
