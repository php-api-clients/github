<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class ListRequiredWorkflowRuns
{
    private const OPERATION_ID = 'actions/list-required-workflow-runs';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/required_workflows/{required_workflow_id_for_repo}/runs';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The ID of the required workflow that has run at least once in a repository.**/
    private int $required_workflow_id_for_repo;
    /**Returns someone's workflow runs. Use the login for the user who created the `push` associated with the check suite or workflow run.**/
    private string $actor;
    /**Returns workflow runs associated with a branch. Use the name of the branch of the `push`.**/
    private string $branch;
    /**Returns workflow run triggered by the event you specify. For example, `push`, `pull_request` or `issue`. For more information, see "[Events that trigger workflows](https://docs.github.com/actions/automating-your-workflow-with-github-actions/events-that-trigger-workflows)."**/
    private string $event;
    /**Returns workflow runs with the check run `status` or `conclusion` that you specify. For example, a conclusion can be `success` or a status can be `in_progress`. Only GitHub can set a status of `waiting` or `requested`.**/
    private string $status;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    /**Returns workflow runs created within the given date-time range. For more information on the syntax, see "[Understanding the search syntax](https://docs.github.com/search-github/getting-started-with-searching-on-github/understanding-the-search-syntax#query-for-dates)."**/
    private string $created;
    /**If `true` pull requests are omitted from the response (empty array).**/
    private bool $exclude_pull_requests;
    /**Returns workflow runs with the `check_suite_id` that you specify.**/
    private int $check_suite_id;
    /**Only returns workflow runs that are associated with the specified `head_sha`.**/
    private string $head_sha;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator, string $owner, string $repo, int $required_workflow_id_for_repo, string $actor, string $branch, string $event, string $status, int $per_page = 30, int $page = 1, string $created, bool $exclude_pull_requests = false, int $check_suite_id, string $head_sha)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->required_workflow_id_for_repo = $required_workflow_id_for_repo;
        $this->actor = $actor;
        $this->branch = $branch;
        $this->event = $event;
        $this->status = $status;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->created = $created;
        $this->exclude_pull_requests = $exclude_pull_requests;
        $this->check_suite_id = $check_suite_id;
        $this->head_sha = $head_sha;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{owner}', '{repo}', '{required_workflow_id_for_repo}', '{actor}', '{branch}', '{event}', '{status}', '{per_page}', '{page}', '{created}', '{exclude_pull_requests}', '{check_suite_id}', '{head_sha}'), array($this->owner, $this->repo, $this->required_workflow_id_for_repo, $this->actor, $this->branch, $this->event, $this->status, $this->per_page, $this->page, $this->created, $this->exclude_pull_requests, $this->check_suite_id, $this->head_sha), '/repos/{owner}/{repo}/actions/required_workflows/{required_workflow_id_for_repo}/runs?actor={actor}&branch={branch}&event={event}&status={status}&per_page={per_page}&page={page}&created={created}&exclude_pull_requests={exclude_pull_requests}&check_suite_id={check_suite_id}&head_sha={head_sha}'));
    }
    /**
     * @return \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListRequiredWorkflowRuns\Response\Application\Json\H200
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListRequiredWorkflowRuns\Response\Application\Json\H200
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListRequiredWorkflowRuns\Response\Application\Json\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Operation\\ListRequiredWorkflowRuns\\Response\\Application\\Json\\H200', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}