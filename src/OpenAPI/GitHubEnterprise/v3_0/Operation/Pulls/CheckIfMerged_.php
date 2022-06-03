<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Pulls;

final class CheckIfMerged_
{
    private const OPERATION_ID = 'pulls/check-if-merged';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /****/
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{pull_number}'), array($this->owner, $this->repo, $this->pull_number), '/repos/{owner}/{repo}/pulls/{pull_number}/merge?'));
    }
    function validateResponse()
    {
    }
}
