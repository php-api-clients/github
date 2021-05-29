<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForTeamDiscussionInOrg
{
    private const OPERATION_ID = 'reactions/list-for-team-discussion-in-org';
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;
    public int $discussion_number;
    /**Returns a single [reaction type](https://docs.github.com/enterprise-server@3.1/rest/reference/reactions#reaction-types). Omit this parameter to list all reactions to a team discussion.**/
    public string $content;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $team_slug, $discussion_number, $content, int $per_page = 30, int $page = 1)
    {
        $this->org               = $org;
        $this->team_slug         = $team_slug;
        $this->discussion_number = $discussion_number;
        $this->content           = $content;
        $this->per_page          = $per_page;
        $this->page              = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{team_slug}', '{discussion_number}', '{content}', '{per_page}', '{page}'], [$this->org, $this->team_slug, $this->discussion_number, $this->content, $this->per_page, $this->page], '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions?content={content}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}