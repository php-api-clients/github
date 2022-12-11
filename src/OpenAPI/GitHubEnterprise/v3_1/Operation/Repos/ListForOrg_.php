<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos;

final class ListForOrg_
{
    private const OPERATION_ID = 'repos/list-for-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**Specifies the types of repositories you want returned. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `type` can also be `internal`. However, the `internal` value is not yet supported when a GitHub App calls this API with an installation access token.**/
    private readonly string $type;
    /**The property to sort the results by.**/
    private readonly string $sort;
    /**The order to sort by. Default: `asc` when using `full_name`, otherwise `desc`.**/
    private readonly string $direction;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, string $type, string $sort = 'created', string $direction, int $per_page = 30, int $page = 1)
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
