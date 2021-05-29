<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListDiscussionComments
{
    private const OPERATION_ID = 'teams/list-discussion-comments';
    public int $team_id;
    public int $discussion_number;
    /**Sorts the discussion comments by the date they were created. To return the oldest comments first, set to `asc`. Can be one of `asc` or `desc`.**/
    public string $direction;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($team_id, $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1)
    {
        $this->team_id           = $team_id;
        $this->discussion_number = $discussion_number;
        $this->direction         = $direction;
        $this->per_page          = $per_page;
        $this->page              = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{team_id}', '{discussion_number}', '{direction}', '{per_page}', '{page}'], [$this->team_id, $this->discussion_number, $this->direction, $this->per_page, $this->page], '/teams/{team_id}/discussions/{discussion_number}/comments?direction={direction}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
