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

use function explode;
use function json_decode;
use function str_replace;

final class ListOrgEventsForAuthenticatedUser
{
    public const OPERATION_ID    = 'activity/list-org-events-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /users/{username}/events/orgs/{org}';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/events/orgs/{org}';
    /**The handle for the GitHub user account.**/
    private string $username;
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Users\CbUsernameRcb\Events\Orgs\CbOrgRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Users\CbUsernameRcb\Events\Orgs\CbOrgRcb $hydrator, string $username, string $org, int $perPage = 30, int $page = 1)
    {
        $this->username                = $username;
        $this->org                     = $org;
        $this->perPage                 = $perPage;
        $this->page                    = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{username}', '{org}', '{per_page}', '{page}'], [$this->username, $this->org, $this->perPage, $this->page], self::PATH . '?per_page={per_page}&page={page}'));
    }

    /**
     * @return Observable<Schema\Event>
     */
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
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, Reader::readFromJson(Schema\Event::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\Event {
                            return $this->hydrator->hydrateObject(Schema\Event::class, $body);
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
