<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Activity;

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

final class ListRepoNotificationsForAuthenticatedUserListing
{
    public const OPERATION_ID    = 'activity/list-repo-notifications-for-authenticated-user';
    public const OPERATION_MATCH = 'LIST /repos/{owner}/{repo}/notifications';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/notifications';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**Only show results that were last updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $since;
    /**Only show notifications updated before the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $before;
    /**If `true`, show notifications marked as read. **/
    private bool $all;
    /**If `true`, only shows notifications in which the user is directly participating or mentioned. **/
    private bool $participating;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Repos\Owner\Repo\Notifications $hydrator, string $owner, string $repo, string $since, string $before, bool $all = false, bool $participating = false, int $perPage = 30, int $page = 1)
    {
        $this->owner         = $owner;
        $this->repo          = $repo;
        $this->since         = $since;
        $this->before        = $before;
        $this->all           = $all;
        $this->participating = $participating;
        $this->perPage       = $perPage;
        $this->page          = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{since}', '{before}', '{all}', '{participating}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->since, $this->before, $this->all, $this->participating, $this->perPage, $this->page], self::PATH . '?since={since}&before={before}&all={all}&participating={participating}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\Thread> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\Thread {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Thread::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\Thread::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
