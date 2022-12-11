<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning;

final class ListAlertsForOrg_
{
    private const OPERATION_ID = 'code-scanning/list-alerts-for-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The name of a code scanning tool. Only results by this tool will be listed. You can specify the tool by using either `tool_name` or `tool_guid`, but not both.**/
    private readonly string $tool_name;
    /**The GUID of a code scanning tool. Only results by this tool will be listed. Note that some code scanning tools may not include a GUID in their analysis data. You can specify the tool by using either `tool_guid` or `tool_name`, but not both.**/
    private readonly string|null $tool_guid;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for results before this cursor.**/
    private readonly string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for results after this cursor.**/
    private readonly string $after;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**The direction to sort the results by.**/
    private readonly string $direction;
    /**If specified, only code scanning alerts with this state will be returned.**/
    private readonly string $state;
    /**The property by which to sort the results.**/
    private readonly string $sort;
    /**If specified, only code scanning alerts with this severity will be returned.**/
    private readonly string $severity;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, string $tool_name, string|null $tool_guid, string $before, string $after, int $page = 1, int $per_page = 30, string $direction = 'desc', string $state, string $sort = 'created', string $severity)
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
        $this->severity = $severity;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{tool_name}', '{tool_guid}', '{before}', '{after}', '{page}', '{per_page}', '{direction}', '{state}', '{sort}', '{severity}'), array($this->org, $this->tool_name, $this->tool_guid, $this->before, $this->after, $this->page, $this->per_page, $this->direction, $this->state, $this->sort, $this->severity), '/orgs/{org}/code-scanning/alerts?tool_name={tool_name}&tool_guid={tool_guid}&before={before}&after={after}&page={page}&per_page={per_page}&direction={direction}&state={state}&sort={sort}&severity={severity}'));
    }
    function validateResponse()
    {
    }
}
