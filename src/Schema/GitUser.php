<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class GitUser
{
    public const SCHEMA_JSON = '{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}';
    public const SCHEMA_TITLE = 'Git User';
    public const SCHEMA_DESCRIPTION = 'Metaproperties for Git author/committer information.';
    public ?string $name;
    public ?string $email;
    public ?string $date;
    public function __construct(string $name, string $email, string $date)
    {
        $this->name = $name;
        $this->email = $email;
        $this->date = $date;
    }
}
