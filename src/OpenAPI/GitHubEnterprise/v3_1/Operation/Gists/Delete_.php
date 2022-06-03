<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists;

final class Delete_
{
    private const OPERATION_ID = 'gists/delete';
    /**The unique identifier of the gist.**/
    public string $gist_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($gist_id)
    {
        $this->gist_id = $gist_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{gist_id}'), array($this->gist_id), '/gists/{gist_id}?'));
    }
    function validateResponse()
    {
    }
}
