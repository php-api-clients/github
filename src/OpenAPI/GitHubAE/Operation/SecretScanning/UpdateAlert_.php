<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning;

final class UpdateAlert_
{
    private const OPERATION_ID = 'secret-scanning/update-alert';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The number that identifies an alert. You can find this at the end of the URL for a code scanning alert within GitHub, and in the `number` field in the response from the `GET /repos/{owner}/{repo}/code-scanning/alerts` operation.**/
    private readonly int $alert_number;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $alert_number)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->alert_number = $alert_number;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{owner}', '{repo}', '{alert_number}'), array($this->owner, $this->repo, $this->alert_number), '/repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}'));
    }
    function validateResponse()
    {
    }
}
