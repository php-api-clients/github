<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CAf766B06Df7768Cf8De492Baebd9A20F
{
    public const SCHEMA_JSON = '{"required":["new_name"],"type":"object","properties":{"new_name":{"type":"string","description":"The new name of the branch."}}}';
    public const SCHEMA_TITLE = 'c_af766b06df7768cf8de492baebd9a20f';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The new name of the branch.
     */
    private string $new_name;
    /**
     * The new name of the branch.
     */
    public function new_name() : string
    {
        return $this->new_name;
    }
}
