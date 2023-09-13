<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Classroom;

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

final class ListAcceptedAssigmentsForAnAssignment
{
    public const OPERATION_ID    = 'classroom/list-accepted-assigments-for-an-assignment';
    public const OPERATION_MATCH = 'GET /assignments/{assignment_id}/accepted_assignments';
    private const METHOD         = 'GET';
    private const PATH           = '/assignments/{assignment_id}/accepted_assignments';
    /**The unique identifier of the classroom assignment. **/
    private int $assignmentId;
    /**Page number of the results to fetch. **/
    private int $page;
    /**The number of results per page (max 100). **/
    private int $perPage;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Assignments\AssignmentId\AcceptedAssignments $hydrator, int $assignmentId, int $page = 1, int $perPage = 30)
    {
        $this->assignmentId = $assignmentId;
        $this->page         = $page;
        $this->perPage      = $perPage;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{assignment_id}', '{page}', '{per_page}'], [$this->assignmentId, $this->page, $this->perPage], self::PATH . '?page={page}&per_page={per_page}'));
    }

    /** @return Observable<Schema\ClassroomAcceptedAssignment> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\ClassroomAcceptedAssignment {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ClassroomAcceptedAssignment::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrators->hydrateObject(Schema\ClassroomAcceptedAssignment::class, $body);
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
