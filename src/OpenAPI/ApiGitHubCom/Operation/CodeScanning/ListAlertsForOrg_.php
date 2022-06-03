<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning;

final class ListAlertsForOrg_
{
    private const OPERATION_ID = 'code-scanning/list-alerts-for-org';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The name of a code scanning tool. Only results by this tool will be listed. You can specify the tool by using either `tool_name` or `tool_guid`, but not both.**/
    public string $tool_name;
    /**The GUID of a code scanning tool. Only results by this tool will be listed. Note that some code scanning tools may not include a GUID in their analysis data. You can specify the tool by using either `tool_guid` or `tool_name`, but not both.**/
    public string $tool_guid;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events before this cursor.**/
    public string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events after this cursor.**/
    public string $after;
    /**Page number of the results to fetch.**/
    public int $page;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**The direction to sort the results by.**/
    public string $direction;
    /**Set to `open`, `closed`, `fixed`, or `dismissed` to list code scanning alerts in a specific state.**/
    public string $state;
    /**The property by which to sort the results.**/
    public string $sort;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $tool_name, $tool_guid, $before, $after, int $page = 1, int $per_page = 30, string $direction = 'desc', $state, string $sort = 'created')
    {
        $this->org = $org;
        $this->tool_name = $tool_name;
        $this->tool_guid = $tool_guid;
        $this->before = $before;
        $this->after = $after;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->direction = $direction;
        $this->state = $state;
        $this->sort = $sort;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{tool_name}', '{tool_guid}', '{before}', '{after}', '{page}', '{per_page}', '{direction}', '{state}', '{sort}'), array($this->org, $this->tool_name, $this->tool_guid, $this->before, $this->after, $this->page, $this->per_page, $this->direction, $this->state, $this->sort), '/orgs/{org}/code-scanning/alerts?tool_name={tool_name}&tool_guid={tool_guid}&before={before}&after={after}&page={page}&per_page={per_page}&direction={direction}&state={state}&sort={sort}'));
    }
    function validateResponse()
    {
    }
}
