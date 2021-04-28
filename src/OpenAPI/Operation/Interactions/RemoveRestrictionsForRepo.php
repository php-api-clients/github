<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Interactions;

final class RemoveRestrictionsForRepo
{
    private const OPERATION_ID = 'interactions/remove-restrictions-for-repo';
    /****/
    public string $owner;
    /****/
    public string $repo;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo)
    {
        $this->owner = $owner;
        $this->repo = $repo;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/interaction-limits?'));
    }
    function validateResponse()
    {
    }
}
