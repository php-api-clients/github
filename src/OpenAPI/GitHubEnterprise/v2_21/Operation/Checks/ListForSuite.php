<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Checks;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForSuite
{
    private const OPERATION_ID = 'checks/list-for-suite';
    public string $owner;
    public string $repo;
    /**check_suite_id parameter**/
    public int $check_suite_id;
    /**Returns check runs with the specified `name`.**/
    public string $check_name;
    /**Returns check runs with the specified `status`. Can be one of `queued`, `in_progress`, or `completed`.**/
    public string $status;
    /**Filters check runs by their `completed_at` timestamp. Can be one of `latest` (returning the most recent check runs) or `all`.**/
    public string $filter;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $check_suite_id, $check_name, $status, string $filter = 'latest', int $per_page = 30, int $page = 1)
    {
        $this->owner          = $owner;
        $this->repo           = $repo;
        $this->check_suite_id = $check_suite_id;
        $this->check_name     = $check_name;
        $this->status         = $status;
        $this->filter         = $filter;
        $this->per_page       = $per_page;
        $this->page           = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{check_suite_id}', '{check_name}', '{status}', '{filter}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->check_suite_id, $this->check_name, $this->status, $this->filter, $this->per_page, $this->page], '/repos/{owner}/{repo}/check-suites/{check_suite_id}/check-runs?check_name={check_name}&status={status}&filter={filter}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
