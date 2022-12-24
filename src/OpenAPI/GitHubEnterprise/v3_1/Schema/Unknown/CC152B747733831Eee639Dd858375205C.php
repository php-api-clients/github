<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CC152B747733831Eee639Dd858375205C
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","-1","laugh","confused","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/reactions#reaction-types) to add to the team discussion."}}}';
    public const SCHEMA_TITLE = 'c_c152b747733831eee639dd858375205c';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The [reaction type](https://docs.github.com/enterprise-server@3.1/rest/reference/reactions#reaction-types) to add to the team discussion.
     */
    private string $content;
    /**
     * The [reaction type](https://docs.github.com/enterprise-server@3.1/rest/reference/reactions#reaction-types) to add to the team discussion.
     */
    public function content() : string
    {
        return $this->content;
    }
}
