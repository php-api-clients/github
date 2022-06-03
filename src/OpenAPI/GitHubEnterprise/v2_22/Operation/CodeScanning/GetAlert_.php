<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\CodeScanning;

final class GetAlert_
{
    private const OPERATION_ID = 'code-scanning/get-alert';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**The number that identifies an alert. You can find this at the end of the URL for a code scanning alert within GitHub, and in the `number` field in the response from the `GET /repos/{owner}/{repo}/code-scanning/alerts` operation.**/
    public int $alert_number;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $alert_number)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->alert_number = $alert_number;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{alert_number}'), array($this->owner, $this->repo, $this->alert_number), '/repos/{owner}/{repo}/code-scanning/alerts/{alert_number}?'));
    }
    function validateResponse()
    {
    }
}
