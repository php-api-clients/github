<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

final class GetEnvironment_
{
    private const OPERATION_ID = 'repos/get-environment';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The name of the environment.**/
    private readonly string $environment_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $environment_name)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->environment_name = $environment_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{environment_name}'), array($this->owner, $this->repo, $this->environment_name), '/repos/{owner}/{repo}/environments/{environment_name}'));
    }
    function validateResponse()
    {
    }
}
