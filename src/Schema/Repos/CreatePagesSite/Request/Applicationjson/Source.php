<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\CreatePagesSite\Request\Applicationjson;

final readonly class Source
{
    public const SCHEMA_JSON = '{"required":["branch"],"type":"object","properties":{"branch":{"type":"string","description":"The repository branch used to publish your site\'s source files."},"path":{"enum":["\\/","\\/docs"],"type":"string","description":"The repository directory that includes the source files for the Pages site. Allowed paths are `\\/` or `\\/docs`. Default: `\\/`","default":"\\/"}},"description":"The source branch and directory used to publish your Pages site."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The source branch and directory used to publish your Pages site.';
    /**
     * The repository branch used to publish your site's source files.
     */
    public ?string $branch;
    /**
     * The repository directory that includes the source files for the Pages site. Allowed paths are `/` or `/docs`. Default: `/`
     */
    public string $path;
    public function __construct(string $branch, string $path)
    {
        $this->branch = $branch;
        $this->path = $path;
    }
}
