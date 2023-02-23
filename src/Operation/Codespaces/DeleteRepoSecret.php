<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Codespaces;

final class DeleteRepoSecret
{
    public const OPERATION_ID = 'codespaces/delete-repo-secret';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/codespaces/secrets/{secret_name}';
    private const METHOD = 'DELETE';
    private const PATH = '/repos/{owner}/{repo}/codespaces/secrets/{secret_name}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The name of the secret.**/
    private string $secret_name;
    public function __construct(string $owner, string $repo, string $secret_name)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->secret_name = $secret_name;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{secret_name}'), array($this->owner, $this->repo, $this->secret_name), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
