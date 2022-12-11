<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists;

final class Fork_
{
    private const OPERATION_ID = 'gists/fork';
    /**The unique identifier of the gist.**/
    private readonly string $gist_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $gist_id)
    {
        $this->gist_id = $gist_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{gist_id}'), array($this->gist_id), '/gists/{gist_id}/forks'));
    }
    function validateResponse()
    {
    }
}
