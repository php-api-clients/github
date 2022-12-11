<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions;

final class ListForTeamDiscussionLegacy_
{
    private const OPERATION_ID = 'reactions/list-for-team-discussion-legacy';
    /**The unique identifier of the team.**/
    private readonly int $team_id;
    /**The number that identifies the discussion.**/
    private readonly int $discussion_number;
    /**Returns a single [reaction type](https://docs.github.com/enterprise-server@3.1/rest/reference/reactions#reaction-types). Omit this parameter to list all reactions to a team discussion.**/
    private readonly string $content;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $team_id, int $discussion_number, string $content, int $per_page = 30, int $page = 1)
    {
        $this->team_id = $team_id;
        $this->discussion_number = $discussion_number;
        $this->content = $content;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{team_id}', '{discussion_number}', '{content}', '{per_page}', '{page}'), array($this->team_id, $this->discussion_number, $this->content, $this->per_page, $this->page), '/teams/{team_id}/discussions/{discussion_number}/reactions?content={content}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
