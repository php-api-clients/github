<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos;

final class ListForOrg_
{
    private const OPERATION_ID = 'repos/list-for-org';
    /****/
    public string $org;
    /**Specifies the types of repositories you want returned. Can be one of `all`, `public`, `private`, `forks`, `sources`, `member`, `internal`. Note: For GitHub AE, can be one of `all`, `private`, `forks`, `sources`, `member`, `internal`. Default: `all`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `type` can also be `internal`. However, the `internal` value is not yet supported when a GitHub App calls this API with an installation access token.**/
    public string $type;
    /**Can be one of `created`, `updated`, `pushed`, `full_name`.**/
    public string $sort;
    /**Can be one of `asc` or `desc`. Default: when using `full_name`: `asc`, otherwise `desc`**/
    public string $direction;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $type, string $sort = 'created', $direction, int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->type = $type;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{type}', '{sort}', '{direction}', '{per_page}', '{page}'), array($this->org, $this->type, $this->sort, $this->direction, $this->per_page, $this->page), '/orgs/{org}/repos?type={type}&sort={sort}&direction={direction}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
