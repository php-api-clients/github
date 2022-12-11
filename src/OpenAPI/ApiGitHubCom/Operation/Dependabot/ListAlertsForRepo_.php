<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot;

final class ListAlertsForRepo_
{
    private const OPERATION_ID = 'dependabot/list-alerts-for-repo';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
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
    /**A comma-separated list of full manifest paths. If specified, only alerts for these manifests will be returned.**/
    private readonly string $manifest;
    /**The scope of the vulnerable dependency. If specified, only alerts with this scope will be returned.**/
    private readonly string $scope;
    /**The property by which to sort the results.
    `created` means when the alert was created.
    `updated` means when the alert's state last changed.**/
    private readonly string $sort;
    /**The direction to sort the results by.**/
    private readonly string $direction;
    /****Deprecated**. Page number of the results to fetch. Use cursor-based pagination with `before` or `after` instead.**/
    private readonly int $page;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
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
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $state, string $severity, string $ecosystem, string $package, string $manifest, string $scope, string $sort = 'created', string $direction = 'desc', int $page = 1, int $per_page = 30, string $before, string $after, int $first = 30, int $last)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->state = $state;
        $this->severity = $severity;
        $this->ecosystem = $ecosystem;
        $this->package = $package;
        $this->manifest = $manifest;
        $this->scope = $scope;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->before = $before;
        $this->after = $after;
        $this->first = $first;
        $this->last = $last;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{state}', '{severity}', '{ecosystem}', '{package}', '{manifest}', '{scope}', '{sort}', '{direction}', '{page}', '{per_page}', '{before}', '{after}', '{first}', '{last}'), array($this->owner, $this->repo, $this->state, $this->severity, $this->ecosystem, $this->package, $this->manifest, $this->scope, $this->sort, $this->direction, $this->page, $this->per_page, $this->before, $this->after, $this->first, $this->last), '/repos/{owner}/{repo}/dependabot/alerts?state={state}&severity={severity}&ecosystem={ecosystem}&package={package}&manifest={manifest}&scope={scope}&sort={sort}&direction={direction}&page={page}&per_page={per_page}&before={before}&after={after}&first={first}&last={last}'));
    }
    function validateResponse()
    {
    }
}
