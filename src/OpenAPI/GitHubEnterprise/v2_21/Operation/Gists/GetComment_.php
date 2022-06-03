<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Gists;

final class GetComment_
{
    private const OPERATION_ID = 'gists/get-comment';
    /**gist_id parameter**/
    public string $gist_id;
    /**comment_id parameter**/
    public int $comment_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($gist_id, $comment_id)
    {
        $this->gist_id = $gist_id;
        $this->comment_id = $comment_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{gist_id}', '{comment_id}'), array($this->gist_id, $this->comment_id), '/gists/{gist_id}/comments/{comment_id}?'));
    }
    function validateResponse()
    {
    }
}
