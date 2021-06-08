<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForTeamDiscussionCommentInOrg
{
    private const OPERATION_ID = 'reactions/list-for-team-discussion-comment-in-org';
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;
    public int $discussion_number;
    public int $comment_number;
    /**Returns a single [reaction type](https://docs.github.com/enterprise-server@2.21/rest/reference/reactions#reaction-types). Omit this parameter to list all reactions to a team discussion comment.**/
    public string $content;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $team_slug, $discussion_number, $comment_number, $content, int $per_page = 30, int $page = 1)
    {
        $this->org               = $org;
        $this->team_slug         = $team_slug;
        $this->discussion_number = $discussion_number;
        $this->comment_number    = $comment_number;
        $this->content           = $content;
        $this->per_page          = $per_page;
        $this->page              = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{team_slug}', '{discussion_number}', '{comment_number}', '{content}', '{per_page}', '{page}'], [$this->org, $this->team_slug, $this->discussion_number, $this->comment_number, $this->content, $this->per_page, $this->page], '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions?content={content}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
