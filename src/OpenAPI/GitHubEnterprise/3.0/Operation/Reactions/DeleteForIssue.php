<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Reactions;

final class DeleteForIssue
{
    private const OPERATION_ID = 'reactions/delete-for-issue';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**issue_number parameter**/
    public int $issue_number;
    /****/
    public int $reaction_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $issue_number, $reaction_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->issue_number = $issue_number;
        $this->reaction_id = $reaction_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{issue_number}', '{reaction_id}'), array($this->owner, $this->repo, $this->issue_number, $this->reaction_id), '/repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}?'));
    }
    function validateResponse()
    {
    }
}
