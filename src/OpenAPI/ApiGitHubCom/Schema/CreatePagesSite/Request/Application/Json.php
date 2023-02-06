<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreatePagesSite\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":["object","null"],"anyOf":[{"required":["source"]},{"required":["build_type"]}],"properties":{"build_type":{"enum":["legacy","workflow"],"type":"string","description":"The process in which the Page will be built. Possible values are `\\"legacy\\"` and `\\"workflow\\"`."},"source":{"required":["branch"],"type":"object","properties":{"branch":{"type":"string","description":"The repository branch used to publish your site\'s source files."},"path":{"enum":["\\/","\\/docs"],"type":"string","description":"The repository directory that includes the source files for the Pages site. Allowed paths are `\\/` or `\\/docs`. Default: `\\/`","default":"\\/"}},"description":"The source branch and directory used to publish your Pages site."}},"description":"The source branch and directory used to publish your Pages site."}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CreatePagesSite\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = 'The source branch and directory used to publish your Pages site.';
    /**
     * The process in which the Page will be built. Possible values are `"legacy"` and `"workflow"`.
     */
    public readonly string $build_type;
    /**
     * The source branch and directory used to publish your Pages site.
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Source $source;
    public function __construct(string $build_type, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Source $source)
    {
        $this->build_type = $build_type;
        $this->source = $source;
    }
}
