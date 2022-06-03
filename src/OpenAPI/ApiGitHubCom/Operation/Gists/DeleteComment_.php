<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists;

final class DeleteComment_
{
    private const OPERATION_ID = 'gists/delete-comment';
    /**The unique identifier of the gist.**/
    public string $gist_id;
    /**The unique identifier of the comment.**/
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{gist_id}', '{comment_id}'), array($this->gist_id, $this->comment_id), '/gists/{gist_id}/comments/{comment_id}?'));
    }
    function validateResponse()
    {
    }
}
