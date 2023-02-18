<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class SelectedActionsUrl
{
    public const SCHEMA_JSON        = '{"type":"string","description":"The API URL to use to get or set the actions and reusable workflows that are allowed to run, when `allowed_actions` is set to `selected`."}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The API URL to use to get or set the actions and reusable workflows that are allowed to run, when `allowed_actions` is set to `selected`.';

    public function __construct()
    {
    }
}
