<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForTeamDiscussionCommentLegacy
{
    private const OPERATION_ID = 'reactions/list-for-team-discussion-comment-legacy';
    public int $team_id;
    public int $discussion_number;
    public int $comment_number;
    /**Returns a single [reaction type](https://docs.github.com/github-ae@latest/rest/reference/reactions#reaction-types). Omit this parameter to list all reactions to a team discussion comment.**/
    public string $content;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($team_id, $discussion_number, $comment_number, $content, int $per_page = 30, int $page = 1)
    {
        $this->team_id           = $team_id;
        $this->discussion_number = $discussion_number;
        $this->comment_number    = $comment_number;
        $this->content           = $content;
        $this->per_page          = $per_page;
        $this->page              = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{team_id}', '{discussion_number}', '{comment_number}', '{content}', '{per_page}', '{page}'], [$this->team_id, $this->discussion_number, $this->comment_number, $this->content, $this->per_page, $this->page], '/teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions?content={content}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
