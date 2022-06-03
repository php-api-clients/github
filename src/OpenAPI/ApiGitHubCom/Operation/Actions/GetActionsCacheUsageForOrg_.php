<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class GetActionsCacheUsageForOrg_
{
    private const OPERATION_ID = 'actions/get-actions-cache-usage-for-org';
    /**The organization name. The name is not case sensitive.**/
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/actions/cache/usage?'));
    }
    function validateResponse()
    {
    }
}
