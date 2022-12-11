<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning;

final class ListRecentAnalyses_
{
    private const OPERATION_ID = 'code-scanning/list-recent-analyses';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The name of a code scanning tool. Only results by this tool will be listed. You can specify the tool by using either `tool_name` or `tool_guid`, but not both.**/
    private readonly string $tool_name;
    /**The GUID of a code scanning tool. Only results by this tool will be listed. Note that some code scanning tools may not include a GUID in their analysis data. You can specify the tool by using either `tool_guid` or `tool_name`, but not both.**/
    private readonly string|null $tool_guid;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**The Git reference for the analyses you want to list. The `ref` for a branch can be formatted either as `refs/heads/<branch name>` or simply `<branch name>`. To reference a pull request use `refs/pull/<number>/merge`.**/
    private readonly string $ref;
    /**Filter analyses belonging to the same SARIF upload.**/
    private readonly string $sarif_id;
    /**The direction to sort the results by.**/
    private readonly string $direction;
    /**The property by which to sort the results.**/
    private readonly string $sort;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $tool_name, string|null $tool_guid, int $page = 1, int $per_page = 30, string $ref, string $sarif_id, string $direction = 'desc', string $sort = 'created')
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->tool_name = $tool_name;
        $this->tool_guid = $tool_guid;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->ref = $ref;
        $this->sarif_id = $sarif_id;
        $this->direction = $direction;
        $this->sort = $sort;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{tool_name}', '{tool_guid}', '{page}', '{per_page}', '{ref}', '{sarif_id}', '{direction}', '{sort}'), array($this->owner, $this->repo, $this->tool_name, $this->tool_guid, $this->page, $this->per_page, $this->ref, $this->sarif_id, $this->direction, $this->sort), '/repos/{owner}/{repo}/code-scanning/analyses?tool_name={tool_name}&tool_guid={tool_guid}&page={page}&per_page={per_page}&ref={ref}&sarif_id={sarif_id}&direction={direction}&sort={sort}'));
    }
    function validateResponse()
    {
    }
}
