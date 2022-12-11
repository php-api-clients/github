<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity;

final class GetThreadSubscriptionForAuthenticatedUser_
{
    private const OPERATION_ID = 'activity/get-thread-subscription-for-authenticated-user';
    /**The unique identifier of the notification thread. This corresponds to the value returned in the `id` field when you retrieve notifications (for example with the [`GET /notifications` operation](https://docs.github.com/github-ae@latest/rest/reference/activity#list-notifications-for-the-authenticated-user)).**/
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{thread_id}'), array($this->thread_id), '/notifications/threads/{thread_id}/subscription'));
    }
    function validateResponse()
    {
    }
}
