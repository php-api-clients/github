<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class DiffEntry
{
    public const SCHEMA_JSON = '{"title":"Diff Entry","required":["additions","blob_url","changes","contents_url","deletions","filename","raw_url","sha","status"],"type":"object","properties":{"sha":{"type":"string","examples":["bbcd538c8e72b8c175046e27cc8f907076331401"]},"filename":{"type":"string","examples":["file1.txt"]},"status":{"enum":["added","removed","modified","renamed","copied","changed","unchanged"],"type":"string","examples":["added"]},"additions":{"type":"integer","examples":[103]},"deletions":{"type":"integer","examples":[21]},"changes":{"type":"integer","examples":[124]},"blob_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/blob\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt"]},"raw_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/raw\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt"]},"contents_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/file1.txt?ref=6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"patch":{"type":"string","examples":["@@ -132,7 +132,7 @@ module Test @@ -1000,7 +1000,7 @@ module Test"]},"previous_filename":{"type":"string","examples":["file.txt"]}},"description":"Diff Entry"}';
    public const SCHEMA_EXAMPLE = '{"sha":"bbcd538c8e72b8c175046e27cc8f907076331401","filename":"file1.txt","status":"added","additions":103,"deletions":21,"changes":124,"blob_url":"https:\\/\\/github.com\\/octocat\\/Hello-World\\/blob\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt","raw_url":"https:\\/\\/github.com\\/octocat\\/Hello-World\\/raw\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt","contents_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/file1.txt?ref=6dcb09b5b57875f334f61aebed695e2e4193db5e","patch":"@@ -132,7 +132,7 @@ module Test @@ -1000,7 +1000,7 @@ module Test","previous_filename":"file.txt"}';
    public const SCHEMA_TITLE = 'Diff Entry';
    public const SCHEMA_DESCRIPTION = 'Diff Entry';
    public readonly string $sha;
    public readonly string $filename;
    public readonly string $status;
    public readonly int $additions;
    public readonly int $deletions;
    public readonly int $changes;
    public readonly string $blob_url;
    public readonly string $raw_url;
    public readonly string $contents_url;
    public readonly ?string $patch;
    public readonly ?string $previous_filename;
    public function __construct(string $sha, string $filename, string $status, int $additions, int $deletions, int $changes, string $blob_url, string $raw_url, string $contents_url, string $patch, string $previous_filename)
    {
        $this->sha = $sha;
        $this->filename = $filename;
        $this->status = $status;
        $this->additions = $additions;
        $this->deletions = $deletions;
        $this->changes = $changes;
        $this->blob_url = $blob_url;
        $this->raw_url = $raw_url;
        $this->contents_url = $contents_url;
        $this->patch = $patch;
        $this->previous_filename = $previous_filename;
    }
}
