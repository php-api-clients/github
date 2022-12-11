<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity;

final class DeleteThreadSubscription_
{
    private const OPERATION_ID = 'activity/delete-thread-subscription';
    /**The unique identifier of the pull request thread.**/
    private readonly int $thread_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $thread_id)
    {
        $this->thread_id = $thread_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{thread_id}'), array($this->thread_id), '/notifications/threads/{thread_id}/subscription'));
    }
    function validateResponse()
    {
    }
}
