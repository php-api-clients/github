<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsCanApprovePullRequestReviews
{
    public const SCHEMA_JSON = '{"type":"boolean","description":"Whether GitHub Actions can approve pull requests. Enabling this can be a security risk."}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'actions-can-approve-pull-request-reviews';
    public const SCHEMA_DESCRIPTION = 'Whether GitHub Actions can approve pull requests. Enabling this can be a security risk.';
    public function __construct()
    {
    }
}
