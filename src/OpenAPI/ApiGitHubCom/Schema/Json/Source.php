<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json;

final class Source
{
    public const SCHEMA_JSON = '{"enum":["gh-pages","master","master \\/docs"],"type":"string","description":"Update the source for the repository. Must include the branch name, and may optionally specify the subdirectory `\\/docs`. Possible values are `\\"gh-pages\\"`, `\\"master\\"`, and `\\"master \\/docs\\"`."}';
    public const SCHEMA_TITLE = 'Json\\Source';
    public const SCHEMA_DESCRIPTION = 'Update the source for the repository. Must include the branch name, and may optionally specify the subdirectory `/docs`. Possible values are `"gh-pages"`, `"master"`, and `"master /docs"`.';
    public function __construct()
    {
    }
}
