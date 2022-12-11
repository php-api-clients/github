<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions;

final class DeleteForIssueComment_
{
    private const OPERATION_ID = 'reactions/delete-for-issue-comment';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The unique identifier of the comment.**/
    private readonly int $comment_id;
    /**The unique identifier of the reaction.**/
    private readonly int $reaction_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $comment_id, int $reaction_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->comment_id = $comment_id;
        $this->reaction_id = $reaction_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{comment_id}', '{reaction_id}'), array($this->owner, $this->repo, $this->comment_id, $this->reaction_id), '/repos/{owner}/{repo}/issues/comments/{comment_id}/reactions/{reaction_id}'));
    }
    function validateResponse()
    {
    }
}
