<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class GitUser
{
    public const SCHEMA_JSON = '{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}';
    public const SCHEMA_TITLE = 'Git User';
    public const SCHEMA_DESCRIPTION = 'Metaproperties for Git author/committer information.';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"\\"Chris Wanstrath\\"","email":"\\"chris@ozmm.org\\"","date":"\\"2007-10-29T02:42:39.000-07:00\\""}';
    public function __construct(public ?string $name, public ?string $email, public ?string $date)
    {
    }
}
