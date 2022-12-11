<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos;

final class ListForAuthenticatedUser_
{
    private const OPERATION_ID = 'repos/list-for-authenticated-user';
    /**Limit results to repositories with the specified visibility.**/
    private readonly string $visibility;
    /**Comma-separated list of values. Can include:  
    \* `owner`: Repositories that are owned by the authenticated user.  
    \* `collaborator`: Repositories that the user has been added to as a collaborator.  
    \* `organization_member`: Repositories that the user has access to through being a member of an organization. This includes every repository on every team that the user is on.**/
    private readonly string $affiliation;
    /**Limit results to repositories of the specified type. Will cause a `422` error if used in the same request as **visibility** or **affiliation**.**/
    private readonly string $type;
    /**The property to sort the results by.**/
    private readonly string $sort;
    /**The order to sort by. Default: `asc` when using `full_name`, otherwise `desc`.**/
    private readonly string $direction;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private readonly string $since;
    /**Only show notifications updated before the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private readonly string $before;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $visibility = 'all', string $affiliation = 'owner,collaborator,organization_member', string $type = 'all', string $sort = 'full_name', string $direction, int $per_page = 30, int $page = 1, string $since, string $before)
    {
        $this->visibility = $visibility;
        $this->affiliation = $affiliation;
        $this->type = $type;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->since = $since;
        $this->before = $before;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{visibility}', '{affiliation}', '{type}', '{sort}', '{direction}', '{per_page}', '{page}', '{since}', '{before}'), array($this->visibility, $this->affiliation, $this->type, $this->sort, $this->direction, $this->per_page, $this->page, $this->since, $this->before), '/user/repos?visibility={visibility}&affiliation={affiliation}&type={type}&sort={sort}&direction={direction}&per_page={per_page}&page={page}&since={since}&before={before}'));
    }
    function validateResponse()
    {
    }
}
