<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Pulls\Merge\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"commit_title":{"type":"string","description":"Title for the automatic commit message."},"commit_message":{"type":"string","description":"Extra detail to append to automatic commit message."},"sha":{"type":"string","description":"SHA that pull request head must match to allow merge."},"merge_method":{"enum":["merge","squash","rebase"],"type":"string","description":"The merge method to use."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"commit_title":"generated_commit_title_null","commit_message":"generated_commit_message_null","sha":"generated_sha_null","merge_method":"generated_merge_method_null"}';
    /**
     * commit_title: Title for the automatic commit message.
     * commit_message: Extra detail to append to automatic commit message.
     * sha: SHA that pull request head must match to allow merge.
     * merge_method: The merge method to use.
     */
    public function __construct(public ?string $commit_title, public ?string $commit_message, public ?string $sha, public ?string $merge_method)
    {
    }
}
