<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ActionsCanApprovePullRequestReviews
{
    public const SCHEMA_JSON = '{"type":"boolean","description":"Whether GitHub Actions can approve pull requests. Enabling this can be a security risk."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Whether GitHub Actions can approve pull requests. Enabling this can be a security risk.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
