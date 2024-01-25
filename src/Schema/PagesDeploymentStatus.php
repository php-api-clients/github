<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class PagesDeploymentStatus
{
    public const SCHEMA_JSON         = '{
    "title": "GitHub Pages deployment status",
    "type": "object",
    "properties": {
        "status": {
            "enum": [
                "deployment_in_progress",
                "syncing_files",
                "finished_file_sync",
                "updating_pages",
                "purging_cdn",
                "deployment_cancelled",
                "deployment_failed",
                "deployment_content_failed",
                "deployment_attempt_error",
                "deployment_lost",
                "succeed"
            ],
            "type": "string",
            "description": "The current status of the deployment."
        }
    }
}';
    public const SCHEMA_TITLE        = 'GitHub Pages deployment status';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "status": "succeed"
}';

    /**
     * status: The current status of the deployment.
     */
    public function __construct(public string|null $status)
    {
    }
}
