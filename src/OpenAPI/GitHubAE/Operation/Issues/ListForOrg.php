<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForOrg
{
    private const OPERATION_ID = 'issues/list-for-org';
    public string $org;
    /**Indicates which sorts of issues to return. Can be one of:
    \* `assigned`: Issues assigned to you
    \* `created`: Issues created by you
    \* `mentioned`: Issues mentioning you
    \* `subscribed`: Issues you're subscribed to updates for
    \* `all`: All issues the authenticated user can see, regardless of participation or creation**/
    public string $filter;
    /**Indicates the state of the issues to return. Can be either `open`, `closed`, or `all`.**/
    public string $state;
    /**A list of comma separated label names. Example: `bug,ui,@high`**/
    public string $labels;
    /**What to sort results by. Can be either `created`, `updated`, `comments`.**/
    public string $sort;
    /**One of `asc` (ascending) or `desc` (descending).**/
    public string $direction;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    public string $since;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, string $filter = 'assigned', string $state = 'open', $labels, string $sort = 'created', string $direction = 'desc', $since, int $per_page = 30, int $page = 1)
    {
        $this->org       = $org;
        $this->filter    = $filter;
        $this->state     = $state;
        $this->labels    = $labels;
        $this->sort      = $sort;
        $this->direction = $direction;
        $this->since     = $since;
        $this->per_page  = $per_page;
        $this->page      = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{filter}', '{state}', '{labels}', '{sort}', '{direction}', '{since}', '{per_page}', '{page}'], [$this->org, $this->filter, $this->state, $this->labels, $this->sort, $this->direction, $this->since, $this->per_page, $this->page], '/orgs/{org}/issues?filter={filter}&state={state}&labels={labels}&sort={sort}&direction={direction}&since={since}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
