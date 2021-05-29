<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Checks;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RerequestSuite
{
    private const OPERATION_ID = 'checks/rerequest-suite';
    public string $owner;
    public string $repo;
    /**check_suite_id parameter**/
    public int $check_suite_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $check_suite_id)
    {
        $this->owner          = $owner;
        $this->repo           = $repo;
        $this->check_suite_id = $check_suite_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace(['{owner}', '{repo}', '{check_suite_id}'], [$this->owner, $this->repo, $this->check_suite_id], '/repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest?'));
    }

    function validateResponse(): void
    {
    }
}
