<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Reactions;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class DeleteForTeamDiscussionComment
{
    public const OPERATION_ID = 'reactions/delete-for-team-discussion-comment';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions/{reaction_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions/{reaction_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The slug of the team name.**/
    private string $teamSlug;
    /**The number that identifies the discussion.**/
    private int $discussionNumber;
    /**The number that identifies the comment.**/
    private int $commentNumber;
    /**The unique identifier of the reaction.**/
    private int $reactionId;
    public function __construct(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, int $reactionId)
    {
        $this->org = $org;
        $this->teamSlug = $teamSlug;
        $this->discussionNumber = $discussionNumber;
        $this->commentNumber = $commentNumber;
        $this->reactionId = $reactionId;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{team_slug}', '{discussion_number}', '{comment_number}', '{reaction_id}'), array($this->org, $this->teamSlug, $this->discussionNumber, $this->commentNumber, $this->reactionId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
