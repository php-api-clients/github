<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Issues;

final class DeleteComment
{
    public const OPERATION_ID = 'issues/delete-comment';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/repos/{owner}/{repo}/issues/comments/{comment_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the comment.**/
    private int $comment_id;
    public function __construct(string $owner, string $repo, int $comment_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->comment_id = $comment_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{comment_id}'), array($this->owner, $this->repo, $this->comment_id), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
