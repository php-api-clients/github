<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Reactions;

final class ListForTeamDiscussionComment_
{
    private const OPERATION_ID = 'reactions/list-for-team-discussion-comment';
    /**This API is under preview and subject to change.**/
    public string $accept;
    /****/
    public int $team_id;
    /****/
    public int $discussion_number;
    /****/
    public int $comment_number;
    /**Returns a single [reaction type](https://docs.github.com/enterprise-server@2.18/rest/reference/reactions#reaction-types). Omit this parameter to list all reactions to a team discussion comment.**/
    public string $content;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $accept = 'application/vnd.github.echo-preview+json,application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number, $comment_number, $content, int $per_page = 30, int $page = 1)
    {
        $this->accept = $accept;
        $this->team_id = $team_id;
        $this->discussion_number = $discussion_number;
        $this->comment_number = $comment_number;
        $this->content = $content;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{team_id}', '{discussion_number}', '{comment_number}', '{content}', '{per_page}', '{page}'), array($this->team_id, $this->discussion_number, $this->comment_number, $this->content, $this->per_page, $this->page), '/teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions?content={content}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
