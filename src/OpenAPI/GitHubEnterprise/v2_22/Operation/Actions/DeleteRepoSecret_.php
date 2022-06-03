<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions;

final class DeleteRepoSecret_
{
    private const OPERATION_ID = 'actions/delete-repo-secret';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**secret_name parameter**/
    public string $secret_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $secret_name)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->secret_name = $secret_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{secret_name}'), array($this->owner, $this->repo, $this->secret_name), '/repos/{owner}/{repo}/actions/secrets/{secret_name}?'));
    }
    function validateResponse()
    {
    }
}
