<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Classroom;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetAssignmentGrades
{
    public const OPERATION_ID    = 'classroom/get-assignment-grades';
    public const OPERATION_MATCH = 'GET /assignments/{assignment_id}/grades';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Assignments\AssignmentId\Grades $hydrator)
    {
    }

    /** @return iterable<int,Schema\ClassroomAssignmentGrade> */
    public function call(int $assignmentId): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Classroom\GetAssignmentGrades($this->responseSchemaValidator, $this->hydrator, $assignmentId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
