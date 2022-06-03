<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Reactions;

final class CreateForTeamDiscussionInOrg_
{
    private const OPERATION_ID = 'reactions/create-for-team-discussion-in-org';
    /****/
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;
    /****/
    public int $discussion_number;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $team_slug, $discussion_number)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->discussion_number = $discussion_number;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{org}', '{team_slug}', '{discussion_number}'), array($this->org, $this->team_slug, $this->discussion_number), '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions?'));
    }
    function validateResponse()
    {
    }
}
