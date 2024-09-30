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

    /** @return Observable<Schema\ClassroomAcceptedAssignment> */
    public function listAcceptedAssignmentsForAnAssignment(int $assignmentId, int $page, int $perPage): iterable
    {
        return $this->operators->classroom👷ListAcceptedAssignmentsForAnAssignment()->call($assignmentId, $page, $perPage);
    }

    /** @return Observable<Schema\ClassroomAcceptedAssignment> */
    public function listAcceptedAssignmentsForAnAssignmentListing(int $assignmentId, int $page, int $perPage): iterable
    {
        return $this->operators->classroom👷ListAcceptedAssignmentsForAnAssignmentListing()->call($assignmentId, $page, $perPage);
    }

    /** @return Observable<Schema\ClassroomAssignmentGrade> */
    public function getAssignmentGrades(int $assignmentId): iterable
    {
        return $this->operators->classroom👷GetAssignmentGrades()->call($assignmentId);
    }

    /** @return Observable<Schema\SimpleClassroom> */
    public function listClassrooms(int $page, int $perPage): iterable
    {
        return $this->operators->classroom👷ListClassrooms()->call($page, $perPage);
    }

    /** @return Observable<Schema\SimpleClassroom> */
    public function listClassroomsListing(int $page, int $perPage): iterable
    {
        return $this->operators->classroom👷ListClassroomsListing()->call($page, $perPage);
    }

    /** @return */
    public function getAClassroom(int $classroomId): \ApiClients\Client\GitHub\Schema\Classroom
    {
        return $this->operators->classroom👷GetAClassroom()->call($classroomId);
    }

    /** @return Observable<Schema\SimpleClassroomAssignment> */
    public function listAssignmentsForAClassroom(int $classroomId, int $page, int $perPage): iterable
    {
        return $this->operators->classroom👷ListAssignmentsForAClassroom()->call($classroomId, $page, $perPage);
    }

    /** @return Observable<Schema\SimpleClassroomAssignment> */
    public function listAssignmentsForAClassroomListing(int $classroomId, int $page, int $perPage): iterable
    {
        return $this->operators->classroom👷ListAssignmentsForAClassroomListing()->call($classroomId, $page, $perPage);
    }
}
