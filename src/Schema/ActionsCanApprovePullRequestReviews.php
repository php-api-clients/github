<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class ActionsCanApprovePullRequestReviews
{
    public const SCHEMA_JSON         = '{"type":"boolean","description":"Whether GitHub Actions can approve pull requests. Enabling this can be a security risk."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Whether GitHub Actions can approve pull requests. Enabling this can be a security risk.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
