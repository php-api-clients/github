<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class CheckCollaborator
{
    public const OPERATION_ID = 'repos/check-collaborator';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/collaborators/{username}';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/collaborators/{username}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The handle for the GitHub user account.**/
    private string $username;
    public function __construct(string $owner, string $repo, string $username)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->username = $username;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{username}'), array($this->owner, $this->repo, $this->username), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
