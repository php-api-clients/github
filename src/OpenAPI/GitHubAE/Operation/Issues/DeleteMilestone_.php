<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues;

final class DeleteMilestone_
{
    private const OPERATION_ID = 'issues/delete-milestone';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The number that identifies the milestone.**/
    private readonly int $milestone_number;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $milestone_number)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->milestone_number = $milestone_number;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{milestone_number}'), array($this->owner, $this->repo, $this->milestone_number), '/repos/{owner}/{repo}/milestones/{milestone_number}'));
    }
    function validateResponse()
    {
    }
}
