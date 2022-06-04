<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity;

final class MarkNotificationsAsRead_
{
    private const OPERATION_ID = 'activity/mark-notifications-as-read';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array(), array(), '/notifications'));
    }
    function validateResponse()
    {
    }
}
