<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Pulls;

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

final class ListListing
{
    public const OPERATION_ID    = 'pulls/list';
    public const OPERATION_MATCH = 'LIST /repos/{owner}/{repo}/pulls';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/pulls';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**Filter pulls by head user or head organization and branch name in the format of `user:ref-name` or `organization:ref-name`. For example: `github:new-script-format` or `octocat:test-branch`. **/
    private string $head;
    /**Filter pulls by base branch name. Example: `gh-pages`. **/
    private string $base;
    /**The direction of the sort. Default: `desc` when sort is `created` or sort is not specified, otherwise `asc`. **/
    private string $direction;
    /**Either `open`, `closed`, or `all` to filter by state. **/
    private string $state;
    /**What to sort results by. `popularity` will sort by the number of comments. `long-running` will sort by date created and will limit the results to pull requests that have been open for more than a month and have had activity within the past month. **/
    private string $sort;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Repos\Owner\Repo\Pulls $hydrator, string $owner, string $repo, string $head, string $base, string $direction, string $state = 'open', string $sort = 'created', int $perPage = 30, int $page = 1)
    {
        $this->owner     = $owner;
        $this->repo      = $repo;
        $this->head      = $head;
        $this->base      = $base;
        $this->direction = $direction;
        $this->state     = $state;
        $this->sort      = $sort;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{head}', '{base}', '{direction}', '{state}', '{sort}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->head, $this->base, $this->direction, $this->state, $this->sort, $this->perPage, $this->page], self::PATH . '?head={head}&base={base}&direction={direction}&state={state}&sort={sort}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\PullRequestSimple>|array{code: int} */
    public function createResponse(ResponseInterface $response): Observable|array
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\PullRequestSimple {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\PullRequestSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\PullRequestSimple::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                    /**
                     * Validation failed, or the endpoint has been spammed.
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ValidationError(422, $this->hydrator->hydrateObject(Schema\ValidationError::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Not modified
             **/
            case 304:
                return ['code' => 304];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
