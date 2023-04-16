<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\CreateOrUpdateFileContents\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["message","content"],"type":"object","properties":{"message":{"type":"string","description":"The commit message."},"content":{"type":"string","description":"The new file content, using Base64 encoding."},"sha":{"type":"string","description":"**Required if you are updating a file**. The blob SHA of the file being replaced."},"branch":{"type":"string","description":"The branch name. Default: the repository\\u2019s default branch."},"committer":{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author or committer of the commit. You\'ll receive a `422` status code if `name` is omitted."},"email":{"type":"string","description":"The email of the author or committer of the commit. You\'ll receive a `422` status code if `email` is omitted."},"date":{"type":"string","examples":["\\"2013-01-05T13:13:22+05:00\\""]}},"description":"The person that committed the file. Default: the authenticated user."},"author":{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author or committer of the commit. You\'ll receive a `422` status code if `name` is omitted."},"email":{"type":"string","description":"The email of the author or committer of the commit. You\'ll receive a `422` status code if `email` is omitted."},"date":{"type":"string","examples":["\\"2013-01-15T17:13:22+05:00\\""]}},"description":"The author of the file. Default: The `committer` or the authenticated user if you omit `committer`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","content":"generated_content_null","sha":"generated_sha_null","branch":"generated_branch_null","committer":{"name":"generated_name_null","email":"generated_email_null","date":"\\"2013-01-05T13:13:22+05:00\\""},"author":{"name":"generated_name_null","email":"generated_email_null","date":"\\"2013-01-15T17:13:22+05:00\\""}}';
    /**
     * message: The commit message.
     * content: The new file content, using Base64 encoding.
     * sha: **Required if you are updating a file**. The blob SHA of the file being replaced.
     * branch: The branch name. Default: the repository’s default branch.
     * committer: The person that committed the file. Default: the authenticated user.
     * author: The author of the file. Default: The `committer` or the authenticated user if you omit `committer`.
     */
    public function __construct(public string $message, public string $content, public ?string $sha, public ?string $branch, public ?Schema\Repos\CreateOrUpdateFileContents\Request\Applicationjson\Committer $committer, public ?Schema\Repos\CreateOrUpdateFileContents\Request\Applicationjson\Author $author)
    {
    }
}
