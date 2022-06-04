<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Gists;

final class GetRevision_
{
    private const OPERATION_ID = 'gists/get-revision';
    /**gist_id parameter**/
    public string $gist_id;
    /****/
    public string $sha;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($gist_id, $sha)
    {
        $this->gist_id = $gist_id;
        $this->sha = $sha;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{gist_id}', '{sha}'), array($this->gist_id, $this->sha), '/gists/{gist_id}/{sha}'));
    }
    function validateResponse()
    {
    }
}
