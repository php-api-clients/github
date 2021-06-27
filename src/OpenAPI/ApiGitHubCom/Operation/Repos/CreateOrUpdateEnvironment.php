<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class CreateOrUpdateEnvironment
{
    private const OPERATION_ID = 'repos/create-or-update-environment';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**The name of the environment**/
    public string $environment_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $environment_name)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->environment_name = $environment_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{owner}', '{repo}', '{environment_name}'), array($this->owner, $this->repo, $this->environment_name), '/repos/{owner}/{repo}/environments/{environment_name}?'));
    }
    function validateResponse()
    {
    }
}
