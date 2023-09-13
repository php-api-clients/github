<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ClassroomAssignmentGrade
{
    public const SCHEMA_JSON         = '{
    "title": "Classroom Assignment Grade",
    "required": [
        "assignment_name",
        "assignment_url",
        "starter_code_url",
        "github_username",
        "roster_identifier",
        "student_repository_name",
        "student_repository_url",
        "submission_timestamp",
        "points_awarded",
        "points_available"
    ],
    "type": "object",
    "properties": {
        "assignment_name": {
            "type": "string",
            "description": "Name of the assignment"
        },
        "assignment_url": {
            "type": "string",
            "description": "URL of the assignment"
        },
        "starter_code_url": {
            "type": "string",
            "description": "URL of the starter code for the assignment"
        },
        "github_username": {
            "type": "string",
            "description": "GitHub username of the student"
        },
        "roster_identifier": {
            "type": "string",
            "description": "Roster identifier of the student"
        },
        "student_repository_name": {
            "type": "string",
            "description": "Name of the student\'s assignment repository"
        },
        "student_repository_url": {
            "type": "string",
            "description": "URL of the student\'s assignment repository"
        },
        "submission_timestamp": {
            "type": "string",
            "description": "Timestamp of the student\'s assignment submission"
        },
        "points_awarded": {
            "type": "integer",
            "description": "Number of points awarded to the student"
        },
        "points_available": {
            "type": "integer",
            "description": "Number of points available for the assignment"
        },
        "group_name": {
            "type": "string",
            "description": "If a group assignment, name of the group the student is in"
        }
    },
    "description": "Grade for a student or groups GitHub Classroom assignment"
}';
    public const SCHEMA_TITLE        = 'Classroom Assignment Grade';
    public const SCHEMA_DESCRIPTION  = 'Grade for a student or groups GitHub Classroom assignment';
    public const SCHEMA_EXAMPLE_DATA = '{
    "assignment_name": "generated",
    "assignment_url": "generated",
    "starter_code_url": "generated",
    "github_username": "generated",
    "roster_identifier": "generated",
    "student_repository_name": "generated",
    "student_repository_url": "generated",
    "submission_timestamp": "generated",
    "points_awarded": 14,
    "points_available": 16,
    "group_name": "generated"
}';

    /**
     * assignmentName: Name of the assignment
     * assignmentUrl: URL of the assignment
     * starterCodeUrl: URL of the starter code for the assignment
     * githubUsername: GitHub username of the student
     * rosterIdentifier: Roster identifier of the student
     * studentRepositoryName: Name of the student's assignment repository
     * studentRepositoryUrl: URL of the student's assignment repository
     * submissionTimestamp: Timestamp of the student's assignment submission
     * pointsAwarded: Number of points awarded to the student
     * pointsAvailable: Number of points available for the assignment
     * groupName: If a group assignment, name of the group the student is in
     */
    public function __construct(#[MapFrom('assignment_name')]
    public string $assignmentName, #[MapFrom('assignment_url')]
    public string $assignmentUrl, #[MapFrom('starter_code_url')]
    public string $starterCodeUrl, #[MapFrom('github_username')]
    public string $githubUsername, #[MapFrom('roster_identifier')]
    public string $rosterIdentifier, #[MapFrom('student_repository_name')]
    public string $studentRepositoryName, #[MapFrom('student_repository_url')]
    public string $studentRepositoryUrl, #[MapFrom('submission_timestamp')]
    public string $submissionTimestamp, #[MapFrom('points_awarded')]
    public int $pointsAwarded, #[MapFrom('points_available')]
    public int $pointsAvailable, #[MapFrom('group_name')]
    public string|null $groupName,)
    {
    }
}
