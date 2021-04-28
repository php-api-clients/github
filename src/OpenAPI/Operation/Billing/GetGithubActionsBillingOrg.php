<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Billing;

final class GetGithubActionsBillingOrg
{
    private const OPERATION_ID = 'billing/get-github-actions-billing-org';
    /****/
    public string $org;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org)
    {
        $this->org = $org;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/settings/billing/actions?'));
    }
    function validateResponse()
    {
    }
}
