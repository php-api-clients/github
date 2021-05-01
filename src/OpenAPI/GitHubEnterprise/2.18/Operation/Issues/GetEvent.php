<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Issues;

final class GetEvent
{
    private const OPERATION_ID = 'issues/get-event';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /****/
    public int $event_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $event_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->event_id = $event_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{event_id}'), array($this->owner, $this->repo, $this->event_id), '/repos/{owner}/{repo}/issues/events/{event_id}?'));
    }
    function validateResponse()
    {
    }
}
