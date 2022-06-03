<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity;

final class MarkThreadAsRead_
{
    private const OPERATION_ID = 'activity/mark-thread-as-read';
    /**The unique identifier of the thread.**/
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
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{thread_id}'), array($this->thread_id), '/notifications/threads/{thread_id}?'));
    }
    function validateResponse()
    {
    }
}
