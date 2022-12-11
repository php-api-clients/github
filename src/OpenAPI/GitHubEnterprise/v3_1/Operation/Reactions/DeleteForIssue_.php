<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions;

final class DeleteForIssue_
{
    private const OPERATION_ID = 'reactions/delete-for-issue';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The number that identifies the issue.**/
    private readonly int $issue_number;
    /**The unique identifier of the reaction.**/
    private readonly int $reaction_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $issue_number, int $reaction_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->issue_number = $issue_number;
        $this->reaction_id = $reaction_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{issue_number}', '{reaction_id}'), array($this->owner, $this->repo, $this->issue_number, $this->reaction_id), '/repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}'));
    }
    function validateResponse()
    {
    }
}
