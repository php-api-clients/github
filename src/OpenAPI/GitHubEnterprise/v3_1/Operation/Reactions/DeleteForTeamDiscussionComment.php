<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteForTeamDiscussionComment
{
    private const OPERATION_ID = 'reactions/delete-for-team-discussion-comment';
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;
    public int $discussion_number;
    public int $comment_number;
    public int $reaction_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $team_slug, $discussion_number, $comment_number, $reaction_id)
    {
        $this->org               = $org;
        $this->team_slug         = $team_slug;
        $this->discussion_number = $discussion_number;
        $this->comment_number    = $comment_number;
        $this->reaction_id       = $reaction_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{org}', '{team_slug}', '{discussion_number}', '{comment_number}', '{reaction_id}'], [$this->org, $this->team_slug, $this->discussion_number, $this->comment_number, $this->reaction_id], '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions/{reaction_id}?'));
    }

    function validateResponse(): void
    {
    }
}
