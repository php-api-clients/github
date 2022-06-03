<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls;

final class DeleteReviewComment_
{
    private const OPERATION_ID = 'pulls/delete-review-comment';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The unique identifier of the comment.**/
    public int $comment_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $comment_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->comment_id = $comment_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{comment_id}'), array($this->owner, $this->repo, $this->comment_id), '/repos/{owner}/{repo}/pulls/comments/{comment_id}?'));
    }
    function validateResponse()
    {
    }
}
