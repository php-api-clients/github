<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C22Cee88Bbae3203Ecd3Ca919892413C3;

final class Source
{
    public const SCHEMA_JSON = '{"required":["branch"],"type":"object","properties":{"branch":{"type":"string","description":"The repository branch used to publish your site\'s source files."},"path":{"enum":["\\/","\\/docs"],"type":"string","description":"The repository directory that includes the source files for the Pages site. Allowed paths are `\\/` or `\\/docs`. Default: `\\/`","default":"\\/"}},"description":"The source branch and directory used to publish your Pages site."}';
    public const SCHEMA_TITLE = 'C22Cee88Bbae3203Ecd3Ca919892413C3\\Source';
    public const SCHEMA_DESCRIPTION = 'The source branch and directory used to publish your Pages site.';
    /**
     * The repository branch used to publish your site's source files.
     */
    private string $branch;
    /**
     * The repository directory that includes the source files for the Pages site. Allowed paths are `/` or `/docs`. Default: `/`
     */
    private ?string $path = null;
    /**
     * The repository branch used to publish your site's source files.
     */
    public function branch() : string
    {
        return $this->branch;
    }
    /**
     * The repository directory that includes the source files for the Pages site. Allowed paths are `/` or `/docs`. Default: `/`
     */
    public function path() : ?string
    {
        return $this->path;
    }
}
