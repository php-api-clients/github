<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Issues;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Internal;
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

final class ListMilestonesListing
{
    public const OPERATION_ID    = 'issues/list-milestones';
    public const OPERATION_MATCH = 'LIST /repos/{owner}/{repo}/milestones';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The state of the milestone. Either `open`, `closed`, or `all`. **/
    private string $state;
    /**What to sort results by. Either `due_on` or `completeness`. **/
    private string $sort;
    /**The direction of the sort. Either `asc` or `desc`. **/
    private string $direction;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones $hydrator, string $owner, string $repo, string $state = 'open', string $sort = 'due_on', string $direction = 'asc', int $perPage = 30, int $page = 1)
    {
        $this->owner     = $owner;
        $this->repo      = $repo;
        $this->state     = $state;
        $this->sort      = $sort;
        $this->direction = $direction;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{state}', '{sort}', '{direction}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->state, $this->sort, $this->direction, $this->perPage, $this->page], '/repos/{owner}/{repo}/milestones' . '?state={state}&sort={sort}&direction={direction}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\Milestone> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\Milestone {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Milestone::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\Milestone::class, $body);
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
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
