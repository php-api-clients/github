<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin;

final class GetPullRequestStats_
{
    private const OPERATION_ID = 'enterprise-admin/get-pull-request-stats';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/enterprise/stats/pulls?'));
    }
    function validateResponse()
    {
    }
}
