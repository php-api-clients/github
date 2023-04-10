<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Pulls;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class ListReviewCommentsForRepo
{
    public const OPERATION_ID = 'pulls/list-review-comments-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pulls/comments';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/pulls/comments';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    private string $sort;
    /**The direction to sort results. Ignored without `sort` parameter.**/
    private string $direction;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private string $since;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments $hydrator, string $owner, string $repo, string $sort, string $direction, string $since, int $perPage = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->since = $since;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{sort}', '{direction}', '{since}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->sort, $this->direction, $this->since, $this->perPage, $this->page), self::PATH . '?sort={sort}&direction={direction}&since={since}&per_page={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<Schema\PullRequestReviewComment>
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\PullRequestReviewComment::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\PullRequestReviewComment {
                            return $this->hydrator->hydrateObject(Schema\PullRequestReviewComment::class, $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
