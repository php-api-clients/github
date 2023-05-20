<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class ListWorkflowRunsForRepo
{
    public const OPERATION_ID    = 'actions/list-workflow-runs-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/runs';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/actions/runs';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**Returns someone's workflow runs. Use the login for the user who created the `push` associated with the check suite or workflow run. **/
    private string $actor;
    /**Returns workflow runs associated with a branch. Use the name of the branch of the `push`. **/
    private string $branch;
    /**Returns workflow run triggered by the event you specify. For example, `push`, `pull_request` or `issue`. For more information, see "[Events that trigger workflows](https://docs.github.com/actions/automating-your-workflow-with-github-actions/events-that-trigger-workflows)." **/
    private string $event;
    /**Returns workflow runs with the check run `status` or `conclusion` that you specify. For example, a conclusion can be `success` or a status can be `in_progress`. Only GitHub can set a status of `waiting` or `requested`. **/
    private string $status;
    /**Returns workflow runs created within the given date-time range. For more information on the syntax, see "[Understanding the search syntax](https://docs.github.com/search-github/getting-started-with-searching-on-github/understanding-the-search-syntax#query-for-dates)." **/
    private string $created;
    /**Returns workflow runs with the `check_suite_id` that you specify. **/
    private int $checkSuiteId;
    /**Only returns workflow runs that are associated with the specified `head_sha`. **/
    private string $headSha;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;
    /**If `true` pull requests are omitted from the response (empty array). **/
    private bool $excludePullRequests;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\Owner\Repo\Actions\Runs $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\Owner\Repo\Actions\Runs $hydrator, string $owner, string $repo, string $actor, string $branch, string $event, string $status, string $created, int $checkSuiteId, string $headSha, int $perPage = 30, int $page = 1, bool $excludePullRequests = false)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->actor                   = $actor;
        $this->branch                  = $branch;
        $this->event                   = $event;
        $this->status                  = $status;
        $this->created                 = $created;
        $this->checkSuiteId            = $checkSuiteId;
        $this->headSha                 = $headSha;
        $this->perPage                 = $perPage;
        $this->page                    = $page;
        $this->excludePullRequests     = $excludePullRequests;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{actor}', '{branch}', '{event}', '{status}', '{created}', '{check_suite_id}', '{head_sha}', '{per_page}', '{page}', '{exclude_pull_requests}'], [$this->owner, $this->repo, $this->actor, $this->branch, $this->event, $this->status, $this->created, $this->checkSuiteId, $this->headSha, $this->perPage, $this->page, $this->excludePullRequests], self::PATH . '?actor={actor}&branch={branch}&event={event}&status={status}&created={created}&check_suite_id={check_suite_id}&head_sha={head_sha}&per_page={per_page}&page={page}&exclude_pull_requests={exclude_pull_requests}'));
    }

    public function createResponse(ResponseInterface $response): Schema\Operations\Actions\ListRequiredWorkflowRuns\Response\ApplicationJson\Ok
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Actions\ListRequiredWorkflowRuns\Response\ApplicationJson\Ok::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\Actions\ListRequiredWorkflowRuns\Response\ApplicationJson\Ok::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
