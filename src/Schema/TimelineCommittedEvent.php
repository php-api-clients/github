<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class TimelineCommittedEvent
{
    public const SCHEMA_JSON = '{"title":"Timeline Committed Event","required":["sha","node_id","url","html_url","author","committer","tree","message","parents","verification"],"type":"object","properties":{"event":{"type":"string"},"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"node_id":{"type":"string"},"url":{"type":"string","format":"uri"},"author":{"required":["email","name","date"],"type":"object","properties":{"date":{"type":"string","description":"Timestamp of the commit","format":"date-time","examples":["2014-08-09T08:02:04+12:00"]},"email":{"type":"string","description":"Git email address of the user","examples":["monalisa.octocat@example.com"]},"name":{"type":"string","description":"Name of the git user","examples":["Monalisa Octocat"]}},"description":"Identifying information for the git-user"},"committer":{"required":["email","name","date"],"type":"object","properties":{"date":{"type":"string","description":"Timestamp of the commit","format":"date-time","examples":["2014-08-09T08:02:04+12:00"]},"email":{"type":"string","description":"Git email address of the user","examples":["monalisa.octocat@example.com"]},"name":{"type":"string","description":"Name of the git user","examples":["Monalisa Octocat"]}},"description":"Identifying information for the git-user"},"message":{"type":"string","description":"Message describing the purpose of the commit","examples":["Fix #42"]},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"}}},"parents":{"type":"array","items":{"required":["sha","url","html_url"],"type":"object","properties":{"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}},"verification":{"required":["verified","reason","signature","payload"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}},"html_url":{"type":"string","format":"uri"}},"description":"Timeline Committed Event"}';
    public const SCHEMA_TITLE = 'Timeline Committed Event';
    public const SCHEMA_DESCRIPTION = 'Timeline Committed Event';
    public const SCHEMA_EXAMPLE_DATA = '{"event":"generated_event_null","sha":"7638417db6d59f3c431d3e1f261cc637155684cd","node_id":"generated_node_id_null","url":"https:\\/\\/example.com\\/","author":{"date":"2014-08-09T08:02:04+12:00","email":"monalisa.octocat@example.com","name":"Monalisa Octocat"},"committer":{"date":"2014-08-09T08:02:04+12:00","email":"monalisa.octocat@example.com","name":"Monalisa Octocat"},"message":"Fix #42","tree":{"sha":"7638417db6d59f3c431d3e1f261cc637155684cd","url":"https:\\/\\/example.com\\/"},"parents":[{"sha":"7638417db6d59f3c431d3e1f261cc637155684cd","url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/"}],"verification":{"verified":false,"reason":"generated_reason_null","signature":"generated_signature_null","payload":"generated_payload_null"},"html_url":"https:\\/\\/example.com\\/"}';
    /**
     * sha: SHA for the commit
     * author: Identifying information for the git-user
     * committer: Identifying information for the git-user
     * message: Message describing the purpose of the commit
     * @param array<\ApiClients\Client\GitHub\Schema\TimelineCommittedEvent\Parents> $parents
     */
    public function __construct(public ?string $event, public string $sha, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $url, public Schema\TimelineCommittedEvent\Author $author, public Schema\TimelineCommittedEvent\Committer $committer, public string $message, public Schema\TimelineCommittedEvent\Tree $tree, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\TimelineCommittedEvent\Parents::class)] public array $parents, public Schema\TimelineCommittedEvent\Verification $verification, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl)
    {
    }
}
