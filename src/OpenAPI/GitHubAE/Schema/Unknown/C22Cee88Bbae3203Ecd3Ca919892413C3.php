<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C22Cee88Bbae3203Ecd3Ca919892413C3
{
    public const SCHEMA_JSON = '{"type":["object","null"],"anyOf":[{"required":["source"]},{"required":["build_type"]}],"properties":{"build_type":{"enum":["legacy","workflow"],"type":"string","description":"The process in which the Page will be built. Possible values are `\\"legacy\\"` and `\\"workflow\\"`."},"source":{"required":["branch"],"type":"object","properties":{"branch":{"type":"string","description":"The repository branch used to publish your site\'s source files."},"path":{"enum":["\\/","\\/docs"],"type":"string","description":"The repository directory that includes the source files for the Pages site. Allowed paths are `\\/` or `\\/docs`. Default: `\\/`","default":"\\/"}},"description":"The source branch and directory used to publish your Pages site."}},"description":"The source branch and directory used to publish your Pages site."}';
    public const SCHEMA_TITLE = 'c_22cee88bbae3203ecd3ca919892413c3';
    public const SCHEMA_DESCRIPTION = 'The source branch and directory used to publish your Pages site.';
    /**
     * The process in which the Page will be built. Possible values are `"legacy"` and `"workflow"`.
     */
    private string $build_type;
    /**
     * The source branch and directory used to publish your Pages site.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDb630B3Ae9E2E7562Ddd316Be333F74B::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDb630B3Ae9E2E7562Ddd316Be333F74B $source;
    /**
     * The process in which the Page will be built. Possible values are `"legacy"` and `"workflow"`.
     */
    public function build_type() : string
    {
        return $this->build_type;
    }
    /**
     * The source branch and directory used to publish your Pages site.
     */
    public function source() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDb630B3Ae9E2E7562Ddd316Be333F74B
    {
        return $this->source;
    }
}
