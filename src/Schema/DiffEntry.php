<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class DiffEntry
{
    public const SCHEMA_JSON = '{"title":"Diff Entry","required":["additions","blob_url","changes","contents_url","deletions","filename","raw_url","sha","status"],"type":"object","properties":{"sha":{"type":"string","examples":["bbcd538c8e72b8c175046e27cc8f907076331401"]},"filename":{"type":"string","examples":["file1.txt"]},"status":{"enum":["added","removed","modified","renamed","copied","changed","unchanged"],"type":"string","examples":["added"]},"additions":{"type":"integer","examples":[103]},"deletions":{"type":"integer","examples":[21]},"changes":{"type":"integer","examples":[124]},"blob_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/blob\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt"]},"raw_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/raw\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt"]},"contents_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/file1.txt?ref=6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"patch":{"type":"string","examples":["@@ -132,7 +132,7 @@ module Test @@ -1000,7 +1000,7 @@ module Test"]},"previous_filename":{"type":"string","examples":["file.txt"]}},"description":"Diff Entry"}';
    public const SCHEMA_TITLE = 'Diff Entry';
    public const SCHEMA_DESCRIPTION = 'Diff Entry';
    public const SCHEMA_EXAMPLE_DATA = '{"sha":"bbcd538c8e72b8c175046e27cc8f907076331401","filename":"file1.txt","status":"added","additions":103,"deletions":21,"changes":124,"blob_url":"https:\\/\\/github.com\\/octocat\\/Hello-World\\/blob\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt","raw_url":"https:\\/\\/github.com\\/octocat\\/Hello-World\\/raw\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt","contents_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/file1.txt?ref=6dcb09b5b57875f334f61aebed695e2e4193db5e","patch":"@@ -132,7 +132,7 @@ module Test @@ -1000,7 +1000,7 @@ module Test","previous_filename":"file.txt"}';
    public function __construct(public ?string $sha, public ?string $filename, public ?string $status, public ?int $additions, public ?int $deletions, public ?int $changes, public ?string $blob_url, public ?string $raw_url, public ?string $contents_url, public string $patch, public string $previous_filename)
    {
    }
}
