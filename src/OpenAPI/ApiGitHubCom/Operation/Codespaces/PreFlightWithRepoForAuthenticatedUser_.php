<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

final class PreFlightWithRepoForAuthenticatedUser_
{
    private const OPERATION_ID = 'codespaces/pre-flight-with-repo-for-authenticated-user';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The branch or commit to check for a default devcontainer path. If not specified, the default branch will be checked.**/
    private readonly string $ref;
    /**An alternative IP for default location auto-detection, such as when proxying a request.**/
    private readonly string $client_ip;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $ref, string $client_ip)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->ref = $ref;
        $this->client_ip = $client_ip;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{ref}', '{client_ip}'), array($this->owner, $this->repo, $this->ref, $this->client_ip), '/repos/{owner}/{repo}/codespaces/new?ref={ref}&client_ip={client_ip}'));
    }
    function validateResponse()
    {
    }
}
