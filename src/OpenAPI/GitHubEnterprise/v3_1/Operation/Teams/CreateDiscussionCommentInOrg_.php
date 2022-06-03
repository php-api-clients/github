<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams;

final class CreateDiscussionCommentInOrg_
{
    private const OPERATION_ID = 'teams/create-discussion-comment-in-org';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The slug of the team name.**/
    public string $team_slug;
    /**The number that identifies the discussion.**/
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{org}', '{team_slug}', '{discussion_number}'), array($this->org, $this->team_slug, $this->discussion_number), '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments?'));
    }
    function validateResponse()
    {
    }
}
