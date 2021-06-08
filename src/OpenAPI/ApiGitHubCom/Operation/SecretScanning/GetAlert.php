<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetAlert
{
    private const OPERATION_ID = 'secret-scanning/get-alert';
    public string $owner;
    public string $repo;
    /**The number that identifies an alert. You can find this at the end of the URL for a code scanning alert within GitHub, and in the `number` field in the response from the `GET /repos/{owner}/{repo}/code-scanning/alerts` operation.**/
    public int $alert_number;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $alert_number)
    {
        $this->owner        = $owner;
        $this->repo         = $repo;
        $this->alert_number = $alert_number;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{alert_number}'], [$this->owner, $this->repo, $this->alert_number], '/repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}?'));
    }

    function validateResponse(): void
    {
    }
}
