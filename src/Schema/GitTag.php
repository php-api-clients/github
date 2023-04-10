<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class GitTag
{
    public const SCHEMA_JSON = '{"title":"Git Tag","required":["sha","url","node_id","tagger","object","tag","message"],"type":"object","properties":{"node_id":{"type":"string","examples":["MDM6VGFnOTQwYmQzMzYyNDhlZmFlMGY5ZWU1YmM3YjJkNWM5ODU4ODdiMTZhYw=="]},"tag":{"type":"string","description":"Name of the tag","examples":["v0.0.1"]},"sha":{"type":"string","examples":["940bd336248efae0f9ee5bc7b2d5c985887b16ac"]},"url":{"type":"string","description":"URL for the tag","format":"uri","examples":["https:\\/\\/api.github.com\\/repositories\\/42\\/git\\/tags\\/940bd336248efae0f9ee5bc7b2d5c985887b16ac"]},"message":{"type":"string","description":"Message describing the purpose of the tag","examples":["Initial public release"]},"tagger":{"required":["date","email","name"],"type":"object","properties":{"date":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"}}},"object":{"required":["sha","type","url"],"type":"object","properties":{"sha":{"type":"string"},"type":{"type":"string"},"url":{"type":"string","format":"uri"}}},"verification":{"title":"Verification","required":["verified","reason","payload","signature"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"payload":{"type":["string","null"]},"signature":{"type":["string","null"]}}}},"description":"Metadata for a Git tag"}';
    public const SCHEMA_TITLE = 'Git Tag';
    public const SCHEMA_DESCRIPTION = 'Metadata for a Git tag';
    public const SCHEMA_EXAMPLE_DATA = '{"node_id":"MDM6VGFnOTQwYmQzMzYyNDhlZmFlMGY5ZWU1YmM3YjJkNWM5ODU4ODdiMTZhYw==","tag":"v0.0.1","sha":"940bd336248efae0f9ee5bc7b2d5c985887b16ac","url":"https:\\/\\/api.github.com\\/repositories\\/42\\/git\\/tags\\/940bd336248efae0f9ee5bc7b2d5c985887b16ac","message":"Initial public release","tagger":{"date":"generated_date_null","email":"generated_email_null","name":"generated_name_null"},"object":{"sha":"generated_sha_null","type":"generated_type_null","url":"https:\\/\\/example.com\\/"},"verification":{"verified":false,"reason":"generated_reason_null","payload":"generated_payload_null","signature":"generated_signature_null"}}';
    /**
     * tag: Name of the tag
     * url: URL for the tag
     * message: Message describing the purpose of the tag
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $tag, public string $sha, public string $url, public string $message, public Schema\GitTag\Tagger $tagger, public Schema\GitTag\Object_ $object, public ?Schema\Verification $verification)
    {
    }
}
