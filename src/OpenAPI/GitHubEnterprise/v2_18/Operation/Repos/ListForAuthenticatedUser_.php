<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos;

final class ListForAuthenticatedUser_
{
    private const OPERATION_ID = 'repos/list-for-authenticated-user';
    /**Can be one of `all`, `public`, or `private`. Note: For GitHub AE, can be one of `all`, `internal`, or `private`.**/
    public string $visibility;
    /**Comma-separated list of values. Can include:  
    \* `owner`: Repositories that are owned by the authenticated user.  
    \* `collaborator`: Repositories that the user has been added to as a collaborator.  
    \* `organization_member`: Repositories that the user has access to through being a member of an organization. This includes every repository on every team that the user is on.**/
    public string $affiliation;
    /**Can be one of `all`, `owner`, `public`, `private`, `member`. Note: For GitHub AE, can be one of `all`, `owner`, `internal`, `private`, `member`. Default: `all`  
      
    Will cause a `422` error if used in the same request as **visibility** or **affiliation**. Will cause a `422` error if used in the same request as **visibility** or **affiliation**.**/
    public string $type;
    /**Can be one of `created`, `updated`, `pushed`, `full_name`.**/
    public string $sort;
    /**Can be one of `asc` or `desc`. Default: `asc` when using `full_name`, otherwise `desc`**/
    public string $direction;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    public string $since;
    /**Only show notifications updated before the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    public string $before;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $visibility = 'all', string $affiliation = 'owner,collaborator,organization_member', string $type = 'all', string $sort = 'full_name', $direction, int $per_page = 30, int $page = 1, $since, $before)
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
