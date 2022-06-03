<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin;

final class SetAnnouncement_
{
    private const OPERATION_ID = 'enterprise-admin/set-announcement';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array(), array(), '/enterprise/announcement?'));
    }
    function validateResponse()
    {
    }
}
