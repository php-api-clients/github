<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\ClassroomAssignment;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Classroom
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<Schema\SimpleClassroom> */
    public function listClassrooms(array $params): iterable
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
        $operator = new Internal\Operator\Classroom\ListClassrooms($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Classrooms());

        return $operator->call($arguments['page'], $arguments['per_page']);
    }

    /** @return */
    public function getAnAssignment(array $params): ClassroomAssignment
    {
        $arguments = [];
        if (array_key_exists('assignment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: assignment_id');
        }

        $arguments['assignment_id'] = $params['assignment_id'];
        unset($params['assignment_id']);
        $operator = new Internal\Operator\Classroom\GetAnAssignment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Assignments🌀AssignmentId());

        return $operator->call($arguments['assignment_id']);
    }

    /** @return */
    public function getAClassroom(array $params): \ApiClients\Client\GitHub\Schema\Classroom
    {
        $arguments = [];
        if (array_key_exists('classroom_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: classroom_id');
        }

        $arguments['classroom_id'] = $params['classroom_id'];
        unset($params['classroom_id']);
        $operator = new Internal\Operator\Classroom\GetAClassroom($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Classrooms🌀ClassroomId());

        return $operator->call($arguments['classroom_id']);
    }

    /** @return Observable<Schema\ClassroomAcceptedAssignment> */
    public function listAcceptedAssigmentsForAnAssignment(array $params): iterable
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
        $operator = new Internal\Operator\Classroom\ListAcceptedAssigmentsForAnAssignment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Assignments🌀AssignmentId🌀AcceptedAssignments());

        return $operator->call($arguments['assignment_id'], $arguments['page'], $arguments['per_page']);
    }

    /** @return Observable<Schema\ClassroomAssignmentGrade> */
    public function getAssignmentGrades(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('assignment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: assignment_id');
        }

        $arguments['assignment_id'] = $params['assignment_id'];
        unset($params['assignment_id']);
        $operator = new Internal\Operator\Classroom\GetAssignmentGrades($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Assignments🌀AssignmentId🌀Grades());

        return $operator->call($arguments['assignment_id']);
    }

    /** @return Observable<Schema\SimpleClassroomAssignment> */
    public function listAssignmentsForAClassroom(array $params): iterable
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
        $operator = new Internal\Operator\Classroom\ListAssignmentsForAClassroom($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Classrooms🌀ClassroomId🌀Assignments());

        return $operator->call($arguments['classroom_id'], $arguments['page'], $arguments['per_page']);
    }
}
