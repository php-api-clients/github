<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning;

final class ListRecentAnalyses_
{
    private const OPERATION_ID = 'code-scanning/list-recent-analyses';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The name of a code scanning tool. Only results by this tool will be listed. You can specify the tool by using either `tool_name` or `tool_guid`, but not both.**/
    public string $tool_name;
    /**The GUID of a code scanning tool. Only results by this tool will be listed. Note that some code scanning tools may not include a GUID in their analysis data. You can specify the tool by using either `tool_guid` or `tool_name`, but not both.**/
    public string $tool_guid;
    /**Page number of the results to fetch.**/
    public int $page;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**The Git reference for the analyses you want to list. The `ref` for a branch can be formatted either as `refs/heads/<branch name>` or simply `<branch name>`. To reference a pull request use `refs/pull/<number>/merge`.**/
    public string $ref;
    /**Filter analyses belonging to the same SARIF upload.**/
    public string $sarif_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $tool_name, $tool_guid, int $page = 1, int $per_page = 30, $ref, $sarif_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->tool_name = $tool_name;
        $this->tool_guid = $tool_guid;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->ref = $ref;
        $this->sarif_id = $sarif_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{tool_name}', '{tool_guid}', '{page}', '{per_page}', '{ref}', '{sarif_id}'), array($this->owner, $this->repo, $this->tool_name, $this->tool_guid, $this->page, $this->per_page, $this->ref, $this->sarif_id), '/repos/{owner}/{repo}/code-scanning/analyses?tool_name={tool_name}&tool_guid={tool_guid}&page={page}&per_page={per_page}&ref={ref}&sarif_id={sarif_id}'));
    }
    function validateResponse()
    {
    }
}
