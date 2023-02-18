<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestSimple;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;

use function json_decode;
use function str_replace;

final class List_
{
    public const OPERATION_ID    = 'pulls/list';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pulls';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/pulls';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**Filter pulls by head user or head organization and branch name in the format of `user:ref-name` or `organization:ref-name`. For example: `github:new-script-format` or `octocat:test-branch`.**/
    private string $head;
    /**Filter pulls by base branch name. Example: `gh-pages`.**/
    private string $base;
    /**The direction of the sort. Default: `desc` when sort is `created` or sort is not specified, otherwise `asc`.**/
    private string $direction;
    /**Either `open`, `closed`, or `all` to filter by state.**/
    private string $state;
    /**What to sort results by. `popularity` will sort by the number of comments. `long-running` will sort by date created and will limit the results to pull requests that have been open for more than a month and have had activity within the past month.**/
    private string $sort;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Pulls $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Pulls $hydrator, string $owner, string $repo, string $head, string $base, string $direction, string $state = 'open', string $sort = 'created', int $per_page = 30, int $page = 1)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->head                    = $head;
        $this->base                    = $base;
        $this->direction               = $direction;
        $this->state                   = $state;
        $this->sort                    = $sort;
        $this->per_page                = $per_page;
        $this->page                    = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{head}', '{base}', '{direction}', '{state}', '{sort}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->head, $this->base, $this->direction, $this->state, $this->sort, $this->per_page, $this->page], self::PATH . '?head={head}&base={base}&direction={direction}&state={state}&sort={sort}&per_page={per_page}&page={page}'));
    }

    /**
     * @return Observable<PullRequestSimple>|ValidationError
     */
    function createResponse(ResponseInterface $response): Observable|ValidationError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Validation failed, or the endpoint has been spammed.**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(PullRequestSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): PullRequestSimple {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\PullRequestSimple', $body);
                        });
                }

                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\ValidationError', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
