<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

final class DeleteRepoSecret_
{
    private const OPERATION_ID = 'codespaces/delete-repo-secret';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The name of the secret.**/
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{secret_name}'), array($this->owner, $this->repo, $this->secret_name), '/repos/{owner}/{repo}/codespaces/secrets/{secret_name}?'));
    }
    function validateResponse()
    {
    }
}
