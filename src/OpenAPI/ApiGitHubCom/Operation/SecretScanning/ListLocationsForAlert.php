<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning;

final class ListLocationsForAlert
{
    private const OPERATION_ID = 'secret-scanning/list-locations-for-alert';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**The number that identifies an alert. You can find this at the end of the URL for a code scanning alert within GitHub, and in the `number` field in the response from the `GET /repos/{owner}/{repo}/code-scanning/alerts` operation.**/
    public int $alert_number;
    /**Page number of the results to fetch.**/
    public int $page;
    /**Results per page (max 100)**/
    public int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $alert_number, int $page = 1, int $per_page = 30)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->alert_number = $alert_number;
        $this->page = $page;
        $this->per_page = $per_page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{alert_number}', '{page}', '{per_page}'), array($this->owner, $this->repo, $this->alert_number, $this->page, $this->per_page), '/repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations?page={page}&per_page={per_page}'));
    }
    function validateResponse()
    {
    }
}
