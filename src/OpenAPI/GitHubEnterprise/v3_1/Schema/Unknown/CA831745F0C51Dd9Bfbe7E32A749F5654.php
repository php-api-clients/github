<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CA831745F0C51Dd9Bfbe7E32A749F5654
{
    public const SCHEMA_JSON = '{"type":["object","null"],"anyOf":[{"required":["source"]}],"properties":{"source":{"required":["branch"],"type":"object","properties":{"branch":{"type":"string","description":"The repository branch used to publish your site\'s source files."},"path":{"enum":["\\/","\\/docs"],"type":"string","description":"The repository directory that includes the source files for the Pages site. Allowed paths are `\\/` or `\\/docs`. Default: `\\/`","default":"\\/"}},"description":"The source branch and directory used to publish your Pages site."}},"description":"The source branch and directory used to publish your Pages site."}';
    public const SCHEMA_TITLE = 'c_a831745f0c51dd9bfbe7e32a749f5654';
    public const SCHEMA_DESCRIPTION = 'The source branch and directory used to publish your Pages site.';
    /**
     * The source branch and directory used to publish your Pages site.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CDb630B3Ae9E2E7562Ddd316Be333F74B::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CDb630B3Ae9E2E7562Ddd316Be333F74B $source;
    /**
     * The source branch and directory used to publish your Pages site.
     */
    public function source() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CDb630B3Ae9E2E7562Ddd316Be333F74B
    {
        return $this->source;
    }
}
