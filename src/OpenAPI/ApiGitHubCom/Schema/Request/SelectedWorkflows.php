<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request;

final class SelectedWorkflows
{
    public const SCHEMA_JSON = '{"type":"string","description":"Name of workflow the runner group should be allowed to run. Note that a ref, tag, or long SHA is required.","examples":["octo-org\\/octo-repo\\/.github\\/workflows\\/deploy.yaml@main"]}';
    public const SCHEMA_TITLE = 'Request\\SelectedWorkflows';
    public const SCHEMA_DESCRIPTION = 'Name of workflow the runner group should be allowed to run. Note that a ref, tag, or long SHA is required.';
}
