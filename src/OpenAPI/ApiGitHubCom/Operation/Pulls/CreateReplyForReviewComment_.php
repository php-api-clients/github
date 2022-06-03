<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls;

final class CreateReplyForReviewComment_
{
    private const OPERATION_ID = 'pulls/create-reply-for-review-comment';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The number that identifies the pull request.**/
    public int $pull_number;
    /**The unique identifier of the comment.**/
    public int $comment_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $pull_number, $comment_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->pull_number = $pull_number;
        $this->comment_id = $comment_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}', '{pull_number}', '{comment_id}'), array($this->owner, $this->repo, $this->pull_number, $this->comment_id), '/repos/{owner}/{repo}/pulls/{pull_number}/comments/{comment_id}/replies?'));
    }
    function validateResponse()
    {
    }
}
