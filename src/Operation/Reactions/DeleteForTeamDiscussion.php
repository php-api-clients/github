<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Reactions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class DeleteForTeamDiscussion
{
    public const OPERATION_ID = 'reactions/delete-for-team-discussion';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions/{reaction_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions/{reaction_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The slug of the team name.**/
    private string $teamSlug;
    /**The number that identifies the discussion.**/
    private int $discussionNumber;
    /**The unique identifier of the reaction.**/
    private int $reactionId;
    public function __construct(string $org, string $teamSlug, int $discussionNumber, int $reactionId)
    {
        $this->org = $org;
        $this->teamSlug = $teamSlug;
        $this->discussionNumber = $discussionNumber;
        $this->reactionId = $reactionId;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{team_slug}', '{discussion_number}', '{reaction_id}'), array($this->org, $this->teamSlug, $this->discussionNumber, $this->reactionId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
