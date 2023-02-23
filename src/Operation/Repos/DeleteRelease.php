<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Repos;

final class DeleteRelease
{
    public const OPERATION_ID = 'repos/delete-release';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/releases/{release_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/repos/{owner}/{repo}/releases/{release_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the release.**/
    private int $release_id;
    public function __construct(string $owner, string $repo, int $release_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->release_id = $release_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{release_id}'), array($this->owner, $this->repo, $this->release_id), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
