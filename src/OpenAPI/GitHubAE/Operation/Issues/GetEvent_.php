<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues;

final class GetEvent_
{
    private const OPERATION_ID = 'issues/get-event';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
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
