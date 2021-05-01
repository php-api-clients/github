<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\EnterpriseAdmin;

final class GetAnnouncement
{
    private const OPERATION_ID = 'enterprise-admin/get-announcement';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/enterprise/announcement?'));
    }
    function validateResponse()
    {
    }
}
