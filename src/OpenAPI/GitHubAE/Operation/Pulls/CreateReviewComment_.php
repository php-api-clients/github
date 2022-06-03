<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls;

final class CreateReviewComment_
{
    private const OPERATION_ID = 'pulls/create-review-comment';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The number that identifies the pull request.**/
    public int $pull_number;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $pull_number)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->pull_number = $pull_number;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}', '{pull_number}'), array($this->owner, $this->repo, $this->pull_number), '/repos/{owner}/{repo}/pulls/{pull_number}/comments?'));
    }
    function validateResponse()
    {
    }
}
