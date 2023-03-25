<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Reactions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class DeleteForIssue
{
    public const OPERATION_ID = 'reactions/delete-for-issue';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The number that identifies the issue.**/
    private int $issueNumber;
    /**The unique identifier of the reaction.**/
    private int $reactionId;
    public function __construct(string $owner, string $repo, int $issueNumber, int $reactionId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->issueNumber = $issueNumber;
        $this->reactionId = $reactionId;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{issue_number}', '{reaction_id}'), array($this->owner, $this->repo, $this->issueNumber, $this->reactionId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
