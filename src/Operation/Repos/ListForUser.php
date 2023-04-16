<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Repos;

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

final class ListForUser
{
    public const OPERATION_ID    = 'repos/list-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/repos';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/repos';
    /**The handle for the GitHub user account.**/
    private string $username;
    /**The order to sort by. Default: `asc` when using `full_name`, otherwise `desc`.**/
    private string $direction;
    /**Limit results to repositories of the specified type.**/
    private string $type;
    /**The property to sort the results by.**/
    private string $sort;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Users\CbUsernameRcb\Repos $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Users\CbUsernameRcb\Repos $hydrator, string $username, string $direction, string $type = 'owner', string $sort = 'full_name', int $perPage = 30, int $page = 1)
    {
        $this->username                = $username;
        $this->direction               = $direction;
        $this->type                    = $type;
        $this->sort                    = $sort;
        $this->perPage                 = $perPage;
        $this->page                    = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{username}', '{direction}', '{type}', '{sort}', '{per_page}', '{page}'], [$this->username, $this->direction, $this->type, $this->sort, $this->perPage, $this->page], self::PATH . '?direction={direction}&type={type}&sort={sort}&per_page={per_page}&page={page}'));
    }

    /**
     * @return Observable<Schema\MinimalRepository>
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
                            $this->responseSchemaValidator->validate($bodyItem, Reader::readFromJson(Schema\MinimalRepository::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\MinimalRepository {
                            return $this->hydrator->hydrateObject(Schema\MinimalRepository::class, $body);
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
