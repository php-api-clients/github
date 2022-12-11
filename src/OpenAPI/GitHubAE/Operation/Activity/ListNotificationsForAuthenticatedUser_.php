<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity;

final class ListNotificationsForAuthenticatedUser_
{
    private const OPERATION_ID = 'activity/list-notifications-for-authenticated-user';
    /**If `true`, show notifications marked as read.**/
    private readonly bool $all;
    /**If `true`, only shows notifications in which the user is directly participating or mentioned.**/
    private readonly bool $participating;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private readonly string $since;
    /**Only show notifications updated before the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private readonly string $before;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**The number of results per page (max 50).**/
    private readonly int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(bool $all = false, bool $participating = false, string $since, string $before, int $page = 1, int $per_page = 50)
    {
        $this->all = $all;
        $this->participating = $participating;
        $this->since = $since;
        $this->before = $before;
        $this->page = $page;
        $this->per_page = $per_page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{all}', '{participating}', '{since}', '{before}', '{page}', '{per_page}'), array($this->all, $this->participating, $this->since, $this->before, $this->page, $this->per_page), '/notifications?all={all}&participating={participating}&since={since}&before={before}&page={page}&per_page={per_page}'));
    }
    function validateResponse()
    {
    }
}
