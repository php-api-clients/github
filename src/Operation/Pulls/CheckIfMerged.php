<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Pulls;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class CheckIfMerged
{
    public const OPERATION_ID = 'pulls/check-if-merged';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pulls/{pull_number}/merge';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/pulls/{pull_number}/merge';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The number that identifies the pull request.**/
    private int $pullNumber;
    public function __construct(string $owner, string $repo, int $pullNumber)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->pullNumber = $pullNumber;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{pull_number}'), array($this->owner, $this->repo, $this->pullNumber), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
