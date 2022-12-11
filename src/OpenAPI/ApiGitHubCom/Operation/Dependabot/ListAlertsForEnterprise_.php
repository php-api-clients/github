<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot;

final class ListAlertsForEnterprise_
{
    private const OPERATION_ID = 'dependabot/list-alerts-for-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private readonly string $enterprise;
    /**A comma-separated list of states. If specified, only alerts with these states will be returned.
    
    Can be: `dismissed`, `fixed`, `open`**/
    private readonly string $state;
    /**A comma-separated list of severities. If specified, only alerts with these severities will be returned.
    
    Can be: `low`, `medium`, `high`, `critical`**/
    private readonly string $severity;
    /**A comma-separated list of ecosystems. If specified, only alerts for these ecosystems will be returned.
    
    Can be: `composer`, `go`, `maven`, `npm`, `nuget`, `pip`, `pub`, `rubygems`, `rust`**/
    private readonly string $ecosystem;
    /**A comma-separated list of package names. If specified, only alerts for these packages will be returned.**/
    private readonly string $package;
    /**The scope of the vulnerable dependency. If specified, only alerts with this scope will be returned.**/
    private readonly string $scope;
    /**The property by which to sort the results.
    `created` means when the alert was created.
    `updated` means when the alert's state last changed.**/
    private readonly string $sort;
    /**The direction to sort the results by.**/
    private readonly string $direction;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for results before this cursor.**/
    private readonly string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for results after this cursor.**/
    private readonly string $after;
    /****Deprecated**. The number of results per page (max 100), starting from the first matching result.
    This parameter must not be used in combination with `last`.
    Instead, use `per_page` in combination with `after` to fetch the first page of results.**/
    private readonly int $first;
    /****Deprecated**. The number of results per page (max 100), starting from the last matching result.
    This parameter must not be used in combination with `first`.
    Instead, use `per_page` in combination with `before` to fetch the last page of results.**/
    private readonly int $last;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $enterprise, string $state, string $severity, string $ecosystem, string $package, string $scope, string $sort = 'created', string $direction = 'desc', string $before, string $after, int $first = 30, int $last, int $per_page = 30)
    {
        $this->enterprise = $enterprise;
        $this->state = $state;
        $this->severity = $severity;
        $this->ecosystem = $ecosystem;
        $this->package = $package;
        $this->scope = $scope;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->before = $before;
        $this->after = $after;
        $this->first = $first;
        $this->last = $last;
        $this->per_page = $per_page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{enterprise}', '{state}', '{severity}', '{ecosystem}', '{package}', '{scope}', '{sort}', '{direction}', '{before}', '{after}', '{first}', '{last}', '{per_page}'), array($this->enterprise, $this->state, $this->severity, $this->ecosystem, $this->package, $this->scope, $this->sort, $this->direction, $this->before, $this->after, $this->first, $this->last, $this->per_page), '/enterprises/{enterprise}/dependabot/alerts?state={state}&severity={severity}&ecosystem={ecosystem}&package={package}&scope={scope}&sort={sort}&direction={direction}&before={before}&after={after}&first={first}&last={last}&per_page={per_page}'));
    }
    function validateResponse()
    {
    }
}
