<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Activity;

final class GetThread
{
    private const OPERATION_ID = 'activity/get-thread';
    /**thread_id parameter**/
    public int $thread_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($thread_id)
    {
        $this->thread_id = $thread_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{thread_id}'), array($this->thread_id), '/notifications/threads/{thread_id}?'));
    }
    function validateResponse()
    {
    }
}