<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing;

final class GetGithubActionsBillingOrg_
{
    private const OPERATION_ID = 'billing/get-github-actions-billing-org';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/settings/billing/actions'));
    }
    function validateResponse()
    {
    }
}
