<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions;

final class CreateForCommitComment_
{
    private const OPERATION_ID = 'reactions/create-for-commit-comment';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**comment_id parameter**/
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}', '{comment_id}'), array($this->owner, $this->repo, $this->comment_id), '/repos/{owner}/{repo}/comments/{comment_id}/reactions?'));
    }
    function validateResponse()
    {
    }
}
