<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\List;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;
use function count;

final class Classroom
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<Schema\ClassroomAcceptedAssignment> */
    public function listAcceptedAssignmentsForAnAssignmentListing(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('assignment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: assignment_id');
        }

        $arguments['assignment_id'] = $params['assignment_id'];
        unset($params['assignment_id']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        $arguments['page'] = 1;
        do {
            $operator = new Internal\Operator\Classroom\ListAcceptedAssignmentsForAnAssignmentListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Assignments🌀AssignmentId🌀AcceptedAssignments());
            $items    = [...$operator->call($arguments['assignment_id'], $arguments['page'], $arguments['per_page'])];

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\SimpleClassroomAssignment> */
    public function listAssignmentsForAClassroomListing(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('classroom_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: classroom_id');
        }

        $arguments['classroom_id'] = $params['classroom_id'];
        unset($params['classroom_id']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        $arguments['page'] = 1;
        do {
            $operator = new Internal\Operator\Classroom\ListAssignmentsForAClassroomListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Classrooms🌀ClassroomId🌀Assignments());
            $items    = [...$operator->call($arguments['classroom_id'], $arguments['page'], $arguments['per_page'])];

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\SimpleClassroom> */
    public function listClassroomsListing(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        $arguments['page'] = 1;
        do {
            $operator = new Internal\Operator\Classroom\ListClassroomsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Classrooms());
            $items    = [...$operator->call($arguments['page'], $arguments['per_page'])];

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }
}
