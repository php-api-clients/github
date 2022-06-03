<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin;

final class GetMilestoneStats_
{
    private const OPERATION_ID = 'enterprise-admin/get-milestone-stats';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/enterprise/stats/milestones?'));
    }
    function validateResponse()
    {
    }
}
