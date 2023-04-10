<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Reactions;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class DeleteForRelease
{
    public const OPERATION_ID = 'reactions/delete-for-release';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/releases/{release_id}/reactions/{reaction_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/repos/{owner}/{repo}/releases/{release_id}/reactions/{reaction_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the release.**/
    private int $releaseId;
    /**The unique identifier of the reaction.**/
    private int $reactionId;
    public function __construct(string $owner, string $repo, int $releaseId, int $reactionId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->releaseId = $releaseId;
        $this->reactionId = $reactionId;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{release_id}', '{reaction_id}'), array($this->owner, $this->repo, $this->releaseId, $this->reactionId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
