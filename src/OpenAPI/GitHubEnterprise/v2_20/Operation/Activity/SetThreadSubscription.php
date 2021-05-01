<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Activity;

final class SetThreadSubscription
{
    private const OPERATION_ID = 'activity/set-thread-subscription';
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
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{thread_id}'), array($this->thread_id), '/notifications/threads/{thread_id}/subscription?'));
    }
    function validateResponse()
    {
    }
}
