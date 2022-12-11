<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing;

final class GetSharedStorageBillingOrg_
{
    private const OPERATION_ID = 'billing/get-shared-storage-billing-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org)
    {
        $this->org = $org;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/settings/billing/shared-storage'));
    }
    function validateResponse()
    {
    }
}
