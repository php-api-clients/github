<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookStatus\Commit;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Commit
{
    public const SCHEMA_JSON = '{"required":["author","committer","message","tree","url","comment_count","verification"],"type":"object","properties":{"author":{"allOf":[{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},{"required":["date"],"type":"object","properties":{"date":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"}}}]},"comment_count":{"type":"integer"},"committer":{"allOf":[{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},{"required":["date"],"type":"object","properties":{"date":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"}}}]},"message":{"type":"string"},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}},"url":{"type":"string","format":"uri"},"verification":{"required":["verified","reason","signature","payload"],"type":"object","properties":{"payload":{"type":["string","null"]},"reason":{"enum":["expired_key","not_signing_key","gpgverify_error","gpgverify_unavailable","unsigned","unknown_signature_type","no_user","unverified_email","bad_email","unknown_key","malformed_signature","invalid","valid","bad_cert","ocsp_pending"],"type":"string"},"signature":{"type":["string","null"]},"verified":{"type":"boolean"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"author":{"date":"1970-01-01T00:00:00+00:00","email":"generated_email_email","name":"generated_name_null","username":"generated_username_null"},"comment_count":13,"committer":{"date":"1970-01-01T00:00:00+00:00","email":"generated_email_email","name":"generated_name_null","username":"generated_username_null"},"message":"generated_message_null","tree":{"sha":"generated_sha_null","url":"https:\\/\\/example.com\\/"},"url":"https:\\/\\/example.com\\/","verification":{"payload":"generated_payload_null","reason":"expired_key","signature":"generated_signature_null","verified":false}}';
    public function __construct(public Schema\WebhookStatus\Commit\Commit\Author $author, #[\EventSauce\ObjectHydrator\MapFrom('comment_count')] public int $commentCount, public Schema\WebhookStatus\Commit\Commit\Committer $committer, public string $message, public Schema\WebhookStatus\Commit\Commit\Tree $tree, public string $url, public Schema\WebhookStatus\Commit\Commit\Verification $verification)
    {
    }
}
