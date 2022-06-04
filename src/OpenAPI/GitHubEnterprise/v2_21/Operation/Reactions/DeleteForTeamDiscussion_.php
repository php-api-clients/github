<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions;

final class DeleteForTeamDiscussion_
{
    private const OPERATION_ID = 'reactions/delete-for-team-discussion';
    /****/
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;
    /****/
    public int $discussion_number;
    /****/
    public int $reaction_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $team_slug, $discussion_number, $reaction_id)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->discussion_number = $discussion_number;
        $this->reaction_id = $reaction_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{team_slug}', '{discussion_number}', '{reaction_id}'), array($this->org, $this->team_slug, $this->discussion_number, $this->reaction_id), '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions/{reaction_id}'));
    }
    function validateResponse()
    {
    }
}
