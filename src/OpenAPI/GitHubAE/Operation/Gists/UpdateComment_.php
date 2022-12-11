<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists;

final class UpdateComment_
{
    private const OPERATION_ID = 'gists/update-comment';
    /**The unique identifier of the gist.**/
    private readonly string $gist_id;
    /**The unique identifier of the comment.**/
    private readonly int $comment_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $gist_id, int $comment_id)
    {
        $this->gist_id = $gist_id;
        $this->comment_id = $comment_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{gist_id}', '{comment_id}'), array($this->gist_id, $this->comment_id), '/gists/{gist_id}/comments/{comment_id}'));
    }
    function validateResponse()
    {
    }
}
