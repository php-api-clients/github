<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Gists;

final class Unstar
{
    private const OPERATION_ID = 'gists/unstar';
    /**gist_id parameter**/
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{gist_id}'), array($this->gist_id), '/gists/{gist_id}/star?'));
    }
    function validateResponse()
    {
    }
}
