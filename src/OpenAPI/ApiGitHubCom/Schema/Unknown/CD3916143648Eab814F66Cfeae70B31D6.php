<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CD3916143648Eab814F66Cfeae70B31D6
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean","default":false}},"description":"Whether to set the branch as read-only. If this is true, users will not be able to push to the branch.","additionalProperties":false}';
    public const SCHEMA_TITLE = 'c_d3916143648eab814f66cfeae70b31d6';
    public const SCHEMA_DESCRIPTION = 'Whether to set the branch as read-only. If this is true, users will not be able to push to the branch.';
    private bool $enabled;
    public function enabled() : bool
    {
        return $this->enabled;
    }
}
