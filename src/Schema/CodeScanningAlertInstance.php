<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeScanningAlertInstance
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "ref": {
            "type": "string",
            "description": "The Git reference, formatted as `refs\\/pull\\/<number>\\/merge`, `refs\\/pull\\/<number>\\/head`,\\n`refs\\/heads\\/<branch name>` or simply `<branch name>`."
        },
        "analysis_key": {
            "type": "string",
            "description": "Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."
        },
        "environment": {
            "type": "string",
            "description": "Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."
        },
        "category": {
            "type": "string",
            "description": "Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code."
        },
        "state": {
            "enum": [
                "open",
                "dismissed",
                "fixed"
            ],
            "type": "string",
            "description": "State of a code scanning alert."
        },
        "commit_sha": {
            "type": "string"
        },
        "message": {
            "type": "object",
            "properties": {
                "text": {
                    "type": "string"
                }
            }
        },
        "location": {
            "type": "object",
            "properties": {
                "path": {
                    "type": "string"
                },
                "start_line": {
                    "type": "integer"
                },
                "end_line": {
                    "type": "integer"
                },
                "start_column": {
                    "type": "integer"
                },
                "end_column": {
                    "type": "integer"
                }
            },
            "description": "Describe a region within a file for the alert."
        },
        "html_url": {
            "type": "string"
        },
        "classifications": {
            "type": "array",
            "items": {
                "enum": [
                    "source",
                    "generated",
                    "test",
                    "library",
                    null
                ],
                "type": [
                    "string",
                    "null"
                ],
                "description": "A classification of the file. For example to identify it as generated."
            },
            "description": "Classifications that have been applied to the file that triggered the alert.\\nFor example identifying it as documentation, or a generated file."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "ref": "generated",
    "analysis_key": "generated",
    "environment": "generated",
    "category": "generated",
    "state": "open",
    "commit_sha": "generated",
    "message": {
        "text": "generated"
    },
    "location": {
        "path": "generated",
        "start_line": 10,
        "end_line": 8,
        "start_column": 12,
        "end_column": 10
    },
    "html_url": "generated",
    "classifications": [
        "generated",
        "generated"
    ]
}';

    /**
     * ref: The Git reference, formatted as `refs/pull/<number>/merge`, `refs/pull/<number>/head`,
    `refs/heads/<branch name>` or simply `<branch name>`.
     * analysisKey: Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
     * environment: Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.
     * category: Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code.
     * state: State of a code scanning alert.
     * location: Describe a region within a file for the alert.
     * classifications: Classifications that have been applied to the file that triggered the alert.
    For example identifying it as documentation, or a generated file.
     */
    public function __construct(public string|null $ref, #[MapFrom('analysis_key')]
    public string|null $analysisKey, public string|null $environment, public string|null $category, public string|null $state, #[MapFrom('commit_sha')]
    public string|null $commitSha, public Schema\CodeScanningAlertInstance\Message|null $message, public Schema\CodeScanningAlertLocation|null $location, #[MapFrom('html_url')]
    public string|null $htmlUrl, public array|null $classifications,)
    {
    }
}
