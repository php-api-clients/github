<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Projects;

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

final class ListCards
{
    public const OPERATION_ID    = 'projects/list-cards';
    public const OPERATION_MATCH = 'GET /projects/columns/{column_id}/cards';
    private const METHOD         = 'GET';
    private const PATH           = '/projects/columns/{column_id}/cards';
    /**The unique identifier of the column. **/
    private int $columnId;
    /**Filters the project cards that are returned by the card's state. **/
    private string $archivedState;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Projects\Columns\ColumnId\Cards $hydrator, int $columnId, string $archivedState = 'not_archived', int $perPage = 30, int $page = 1)
    {
        $this->columnId      = $columnId;
        $this->archivedState = $archivedState;
        $this->perPage       = $perPage;
        $this->page          = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{column_id}', '{archived_state}', '{per_page}', '{page}'], [$this->columnId, $this->archivedState, $this->perPage, $this->page], self::PATH . '?archived_state={archived_state}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\ProjectCard>|array{code: int} */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\ProjectCard {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ProjectCard::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\ProjectCard::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Requires authentication
                     **/

                    case 401:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(401, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
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
