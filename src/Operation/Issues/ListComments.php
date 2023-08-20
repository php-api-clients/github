<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Issues;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;
use function str_replace;

final class ListComments
{
    public const OPERATION_ID    = 'issues/list-comments';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/issues/{issue_number}/comments';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/issues/{issue_number}/comments';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The number that identifies the issue. **/
    private int $issueNumber;
    /**Only show results that were last updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $since;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Comments $hydrator, string $owner, string $repo, int $issueNumber, string $since, int $perPage = 30, int $page = 1)
    {
        $this->owner       = $owner;
        $this->repo        = $repo;
        $this->issueNumber = $issueNumber;
        $this->since       = $since;
        $this->perPage     = $perPage;
        $this->page        = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{issue_number}', '{since}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->issueNumber, $this->since, $this->perPage, $this->page], self::PATH . '?since={since}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\IssueComment> */
    public function createResponse(ResponseInterface $response): Observable
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\IssueComment {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\IssueComment::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\IssueComment::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Gone
                     **/

                    case 410:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(410, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
