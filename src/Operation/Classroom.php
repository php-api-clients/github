<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\ClassroomAssignment;

final class Classroom
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function getAnAssignment(int $assignmentId): ClassroomAssignment
    {
        return $this->operators->classroom👷GetAnAssignment()->call($assignmentId);
    }

    /** @return iterable<int,Schema\ClassroomAcceptedAssignment> */
    public function listAcceptedAssigmentsForAnAssignment(int $assignmentId, int $page, int $perPage): iterable
    {
        return $this->operators->classroom👷ListAcceptedAssigmentsForAnAssignment()->call($assignmentId, $page, $perPage);
    }

    /** @return iterable<int,Schema\ClassroomAcceptedAssignment> */
    public function listAcceptedAssigmentsForAnAssignmentListing(int $assignmentId, int $page, int $perPage): iterable
    {
        return $this->operators->classroom👷ListAcceptedAssigmentsForAnAssignmentListing()->call($assignmentId, $page, $perPage);
    }

    /** @return Observable<Schema\ClassroomAssignmentGrade> */
    public function getAssignmentGrades(int $assignmentId): iterable
    {
        return $this->operators->classroom👷GetAssignmentGrades()->call($assignmentId);
    }

    /** @return iterable<int,Schema\SimpleClassroom> */
    public function listClassrooms(int $page, int $perPage): iterable
    {
        return $this->operators->classroom👷ListClassrooms()->call($page, $perPage);
    }

    /** @return iterable<int,Schema\SimpleClassroom> */
    public function listClassroomsListing(int $page, int $perPage): iterable
    {
        return $this->operators->classroom👷ListClassroomsListing()->call($page, $perPage);
    }

    /** @return */
    public function getAClassroom(int $classroomId): \ApiClients\Client\GitHub\Schema\Classroom
    {
        return $this->operators->classroom👷GetAClassroom()->call($classroomId);
    }

    /** @return iterable<int,Schema\SimpleClassroomAssignment> */
    public function listAssignmentsForAClassroom(int $classroomId, int $page, int $perPage): iterable
    {
        return $this->operators->classroom👷ListAssignmentsForAClassroom()->call($classroomId, $page, $perPage);
    }

    /** @return iterable<int,Schema\SimpleClassroomAssignment> */
    public function listAssignmentsForAClassroomListing(int $classroomId, int $page, int $perPage): iterable
    {
        return $this->operators->classroom👷ListAssignmentsForAClassroomListing()->call($classroomId, $page, $perPage);
    }
}
