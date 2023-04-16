<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Commit;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class Commit
{
    public const SCHEMA_JSON = '{"required":["author","committer","comment_count","message","tree","url"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"author":{"anyOf":[{"type":"null"},{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}]},"committer":{"anyOf":[{"type":"null"},{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}]},"message":{"type":"string","examples":["Fix all the bugs"]},"comment_count":{"type":"integer","examples":[0]},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string","examples":["827efc6d56897b048c772eb4087f854f46256132"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tree\\/827efc6d56897b048c772eb4087f854f46256132"]}}},"verification":{"title":"Verification","required":["verified","reason","payload","signature"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"payload":{"type":["string","null"]},"signature":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/6dcb09b5b57875f334f61aebed695e2e4193db5e","author":{"name":"\\"Chris Wanstrath\\"","email":"\\"chris@ozmm.org\\"","date":"\\"2007-10-29T02:42:39.000-07:00\\""},"committer":{"name":"\\"Chris Wanstrath\\"","email":"\\"chris@ozmm.org\\"","date":"\\"2007-10-29T02:42:39.000-07:00\\""},"message":"Fix all the bugs","comment_count":0,"tree":{"sha":"827efc6d56897b048c772eb4087f854f46256132","url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tree\\/827efc6d56897b048c772eb4087f854f46256132"},"verification":{"verified":false,"reason":"generated_reason_null","payload":"generated_payload_null","signature":"generated_signature_null"}}';
    public function __construct(public string $url, public ?Schema\GitUser $author, public ?Schema\GitUser $committer, public string $message, #[\EventSauce\ObjectHydrator\MapFrom('comment_count')] public int $commentCount, public Schema\Commit\Commit\Tree $tree, public ?Schema\Verification $verification)
    {
    }
}
