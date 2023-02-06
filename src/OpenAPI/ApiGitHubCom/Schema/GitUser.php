<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class GitUser
{
    public const SCHEMA_JSON = '{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}';
    public const SCHEMA_EXAMPLE = '{"name":"\\"Chris Wanstrath\\"","email":"\\"chris@ozmm.org\\"","date":"\\"2007-10-29T02:42:39.000-07:00\\""}';
    public const SCHEMA_TITLE = 'Git User';
    public const SCHEMA_DESCRIPTION = 'Metaproperties for Git author/committer information.';
    public readonly string $name;
    public readonly string $email;
    public readonly string $date;
    public function __construct(string $name, string $email, string $date)
    {
        $this->name = $name;
        $this->email = $email;
        $this->date = $date;
    }
}
