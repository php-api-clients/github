<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CDf2A324Bf8F8283C7167Dc15368824Bd
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","-1","laugh","confused","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/reactions#reaction-types) to add to the team discussion comment."}}}';
    public const SCHEMA_TITLE = 'c_df2a324bf8f8283c7167dc15368824bd';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The [reaction type](https://docs.github.com/enterprise-server@3.1/rest/reference/reactions#reaction-types) to add to the team discussion comment.
     */
    private string $content;
    /**
     * The [reaction type](https://docs.github.com/enterprise-server@3.1/rest/reference/reactions#reaction-types) to add to the team discussion comment.
     */
    public function content() : string
    {
        return $this->content;
    }
}
