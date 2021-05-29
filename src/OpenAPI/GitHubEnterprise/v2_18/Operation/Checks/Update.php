<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Checks;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class Update
{
    private const OPERATION_ID = 'checks/update';
    public string $owner;
    public string $repo;
    /**check_run_id parameter**/
    public int $check_run_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $check_run_id)
    {
        $this->owner        = $owner;
        $this->repo         = $repo;
        $this->check_run_id = $check_run_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('patch', str_replace(['{owner}', '{repo}', '{check_run_id}'], [$this->owner, $this->repo, $this->check_run_id], '/repos/{owner}/{repo}/check-runs/{check_run_id}?'));
    }

    function validateResponse(): void
    {
    }
}
