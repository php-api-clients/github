<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class SimpleClassroomAssignment
{
    public const SCHEMA_JSON         = '{
    "title": "Simple Classroom Assignment",
    "required": [
        "id",
        "public_repo",
        "title",
        "type",
        "invite_link",
        "invitations_enabled",
        "slug",
        "students_are_repo_admins",
        "feedback_pull_requests_enabled",
        "editor",
        "accepted",
        "submitted",
        "passing",
        "language",
        "deadline",
        "classroom"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "Unique identifier of the repository.",
            "examples": [
                42
            ]
        },
        "public_repo": {
            "type": "boolean",
            "description": "Whether an accepted assignment creates a public repository.",
            "examples": [
                true
            ]
        },
        "title": {
            "type": "string",
            "description": "Assignment title.",
            "examples": [
                "Intro to Binaries"
            ]
        },
        "type": {
            "enum": [
                "individual",
                "group"
            ],
            "type": "string",
            "description": "Whether it\'s a Group Assignment or Individual Assignment.",
            "examples": [
                "individual"
            ]
        },
        "invite_link": {
            "type": "string",
            "description": "The link that a student can use to accept the assignment.",
            "examples": [
                "https:\\/\\/classroom.github.com\\/a\\/Lx7jiUgx"
            ]
        },
        "invitations_enabled": {
            "type": "boolean",
            "description": "Whether the invitation link is enabled. Visiting an enabled invitation link will accept the assignment.",
            "examples": [
                true
            ]
        },
        "slug": {
            "type": "string",
            "description": "Sluggified name of the assignment.",
            "examples": [
                "intro-to-binaries"
            ]
        },
        "students_are_repo_admins": {
            "type": "boolean",
            "description": "Whether students are admins on created repository on accepted assignment.",
            "examples": [
                true
            ]
        },
        "feedback_pull_requests_enabled": {
            "type": "boolean",
            "description": "Whether feedback pull request will be created on assignment acceptance.",
            "examples": [
                true
            ]
        },
        "max_teams": {
            "type": [
                "integer",
                "null"
            ],
            "description": "The maximum allowable teams for the assignment.",
            "examples": [
                0
            ]
        },
        "max_members": {
            "type": [
                "integer",
                "null"
            ],
            "description": "The maximum allowable members per team.",
            "examples": [
                0
            ]
        },
        "editor": {
            "type": "string",
            "description": "The selected editor for the assignment.",
            "examples": [
                "codespaces"
            ]
        },
        "accepted": {
            "type": "integer",
            "description": "The number of students that have accepted the assignment.",
            "examples": [
                25
            ]
        },
        "submitted": {
            "type": "integer",
            "description": "The number of students that have submitted the assignment.",
            "examples": [
                10
            ]
        },
        "passing": {
            "type": "integer",
            "description": "The number of students that have passed the assignment.",
            "examples": [
                10
            ]
        },
        "language": {
            "type": "string",
            "description": "The programming language used in the assignment.",
            "examples": [
                "elixir"
            ]
        },
        "deadline": {
            "type": [
                "string",
                "null"
            ],
            "description": "The time at which the assignment is due.",
            "format": "date-time",
            "examples": [
                "2011-01-26T19:06:43Z"
            ]
        },
        "classroom": {
            "title": "Simple Classroom",
            "required": [
                "id",
                "name",
                "archived",
                "url"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer",
                    "description": "Unique identifier of the classroom.",
                    "examples": [
                        42
                    ]
                },
                "name": {
                    "type": "string",
                    "description": "The name of the classroom.",
                    "examples": [
                        "Programming Elixir"
                    ]
                },
                "archived": {
                    "type": "boolean",
                    "description": "Returns whether classroom is archived or not.",
                    "examples": [
                        false
                    ]
                },
                "url": {
                    "type": "string",
                    "description": "The url of the classroom on GitHub Classroom.",
                    "examples": [
                        "https:\\/\\/classroom.github.com\\/classrooms\\/1-programming-elixir"
                    ]
                }
            },
            "description": "A GitHub Classroom classroom"
        }
    },
    "description": "A GitHub Classroom assignment"
}';
    public const SCHEMA_TITLE        = 'Simple Classroom Assignment';
    public const SCHEMA_DESCRIPTION  = 'A GitHub Classroom assignment';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 42,
    "public_repo": true,
    "title": "Intro to Binaries",
    "type": "individual",
    "invite_link": "https:\\/\\/classroom.github.com\\/a\\/Lx7jiUgx",
    "invitations_enabled": true,
    "slug": "intro-to-binaries",
    "students_are_repo_admins": true,
    "feedback_pull_requests_enabled": true,
    "max_teams": 0,
    "max_members": 0,
    "editor": "codespaces",
    "accepted": 25,
    "submitted": 10,
    "passing": 10,
    "language": "elixir",
    "deadline": "2011-01-26T19:06:43Z",
    "classroom": {
        "id": 42,
        "name": "Programming Elixir",
        "archived": false,
        "url": "https:\\/\\/classroom.github.com\\/classrooms\\/1-programming-elixir"
    }
}';

    /**
     * id: Unique identifier of the repository.
     * publicRepo: Whether an accepted assignment creates a public repository.
     * title: Assignment title.
     * type: Whether it's a Group Assignment or Individual Assignment.
     * inviteLink: The link that a student can use to accept the assignment.
     * invitationsEnabled: Whether the invitation link is enabled. Visiting an enabled invitation link will accept the assignment.
     * slug: Sluggified name of the assignment.
     * studentsAreRepoAdmins: Whether students are admins on created repository on accepted assignment.
     * feedbackPullRequestsEnabled: Whether feedback pull request will be created on assignment acceptance.
     * maxTeams: The maximum allowable teams for the assignment.
     * maxMembers: The maximum allowable members per team.
     * editor: The selected editor for the assignment.
     * accepted: The number of students that have accepted the assignment.
     * submitted: The number of students that have submitted the assignment.
     * passing: The number of students that have passed the assignment.
     * language: The programming language used in the assignment.
     * deadline: The time at which the assignment is due.
     * classroom: A GitHub Classroom classroom
     */
    public function __construct(public int $id, #[MapFrom('public_repo')]
    public bool $publicRepo, public string $title, public string $type, #[MapFrom('invite_link')]
    public string $inviteLink, #[MapFrom('invitations_enabled')]
    public bool $invitationsEnabled, public string $slug, #[MapFrom('students_are_repo_admins')]
    public bool $studentsAreRepoAdmins, #[MapFrom('feedback_pull_requests_enabled')]
    public bool $feedbackPullRequestsEnabled, #[MapFrom('max_teams')]
    public int|null $maxTeams, #[MapFrom('max_members')]
    public int|null $maxMembers, public string $editor, public int $accepted, public int $submitted, public int $passing, public string $language, public string|null $deadline, public Schema\SimpleClassroom $classroom,)
    {
    }
}
