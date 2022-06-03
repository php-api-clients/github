<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning;

final class ListAlertsForRepo_
{
    private const OPERATION_ID = 'code-scanning/list-alerts-for-repo';
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
    /**The Git reference for the results you want to list. The `ref` for a branch can be formatted either as `refs/heads/<branch name>` or simply `<branch name>`. To reference a pull request use `refs/pull/<number>/merge`.**/
    public string $ref;
    /**The direction to sort the results by.**/
    public string $direction;
    /**The property by which to sort the results.**/
    public string $sort;
    /**Set to `open`, `closed, `fixed`, or `dismissed` to list code scanning alerts in a specific state.**/
    public string $state;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $tool_name, $tool_guid, int $page = 1, int $per_page = 30, $ref, string $direction = 'desc', string $sort = 'number', $state)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->tool_name = $tool_name;
        $this->tool_guid = $tool_guid;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->ref = $ref;
        $this->direction = $direction;
        $this->sort = $sort;
        $this->state = $state;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{tool_name}', '{tool_guid}', '{page}', '{per_page}', '{ref}', '{direction}', '{sort}', '{state}'), array($this->owner, $this->repo, $this->tool_name, $this->tool_guid, $this->page, $this->per_page, $this->ref, $this->direction, $this->sort, $this->state), '/repos/{owner}/{repo}/code-scanning/alerts?tool_name={tool_name}&tool_guid={tool_guid}&page={page}&per_page={per_page}&ref={ref}&direction={direction}&sort={sort}&state={state}'));
    }
    function validateResponse()
    {
    }
}
