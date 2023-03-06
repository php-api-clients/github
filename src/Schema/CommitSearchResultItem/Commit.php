<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\CommitSearchResultItem;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Commit
{
    public const SCHEMA_JSON = '{"required":["author","committer","comment_count","message","tree","url"],"type":"object","properties":{"author":{"required":["name","email","date"],"type":"object","properties":{"name":{"type":"string"},"email":{"type":"string"},"date":{"type":"string","format":"date-time"}}},"committer":{"anyOf":[{"type":"null"},{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}]},"comment_count":{"type":"integer"},"message":{"type":"string"},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}},"url":{"type":"string","format":"uri"},"verification":{"title":"Verification","required":["verified","reason","payload","signature"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"payload":{"type":["string","null"]},"signature":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"author":{"name":"generated_name","email":"generated_email","date":"generated_date"},"committer":{"name":"\\"Chris Wanstrath\\"","email":"\\"chris@ozmm.org\\"","date":"\\"2007-10-29T02:42:39.000-07:00\\""},"comment_count":13,"message":"generated_message","tree":{"sha":"generated_sha","url":"generated_url"},"url":"generated_url","verification":{"verified":false,"reason":"generated_reason","payload":"generated_payload","signature":"generated_signature"}}';
    public function __construct(public ?Schema\CommitSearchResultItem\Commit\Author $author, public ?Schema\GitUser $committer, public ?int $comment_count, public ?string $message, public ?Schema\ShortBranch\Commit $tree, public ?string $url, public Schema\Verification $verification)
    {
    }
}
