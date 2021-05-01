<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning;

final class ListAlertsInstances
{
    private const OPERATION_ID = 'code-scanning/list-alerts-instances';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**The number that identifies an alert. You can find this at the end of the URL for a code scanning alert within GitHub, and in the `number` field in the response from the `GET /repos/{owner}/{repo}/code-scanning/alerts` operation.**/
    public int $alert_number;
    /**Page number of the results to fetch.**/
    public int $page;
    /**Results per page (max 100).**/
    public int $per_page;
    /**The Git reference for the results you want to list. The `ref` for a branch can be formatted either as `refs/heads/<branch name>` or simply `<branch name>`. To reference a pull request use `refs/pull/<number>/merge`.**/
    public string $ref;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $alert_number, int $page = 1, int $per_page = 30, $ref)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->alert_number = $alert_number;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->ref = $ref;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{alert_number}', '{page}', '{per_page}', '{ref}'), array($this->owner, $this->repo, $this->alert_number, $this->page, $this->per_page, $this->ref), '/repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/instances?page={page}&per_page={per_page}&ref={ref}'));
    }
    function validateResponse()
    {
    }
}
