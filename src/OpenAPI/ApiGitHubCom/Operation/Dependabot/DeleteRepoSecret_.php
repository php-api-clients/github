<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot;

final class DeleteRepoSecret_
{
    private const OPERATION_ID = 'dependabot/delete-repo-secret';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The name of the secret.**/
    private readonly string $secret_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $secret_name)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->secret_name = $secret_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{secret_name}'), array($this->owner, $this->repo, $this->secret_name), '/repos/{owner}/{repo}/dependabot/secrets/{secret_name}'));
    }
    function validateResponse()
    {
    }
}
