<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class DiffEntry
{
    public const SCHEMA_JSON = '{"title":"Diff Entry","required":["additions","blob_url","changes","contents_url","deletions","filename","raw_url","sha","status"],"type":"object","properties":{"sha":{"type":"string","examples":["bbcd538c8e72b8c175046e27cc8f907076331401"]},"filename":{"type":"string","examples":["file1.txt"]},"status":{"enum":["added","removed","modified","renamed","copied","changed","unchanged"],"type":"string","examples":["added"]},"additions":{"type":"integer","examples":[103]},"deletions":{"type":"integer","examples":[21]},"changes":{"type":"integer","examples":[124]},"blob_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/blob\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt"]},"raw_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/raw\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt"]},"contents_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/file1.txt?ref=6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"patch":{"type":"string","examples":["@@ -132,7 +132,7 @@ module Test @@ -1000,7 +1000,7 @@ module Test"]},"previous_filename":{"type":"string","examples":["file.txt"]}},"description":"Diff Entry"}';
    public const SCHEMA_TITLE = 'Diff Entry';
    public const SCHEMA_DESCRIPTION = 'Diff Entry';
    private string $sha;
    private string $filename;
    private string $status;
    private int $additions;
    private int $deletions;
    private int $changes;
    private string $blob_url;
    private string $raw_url;
    private string $contents_url;
    private ?string $patch = null;
    private ?string $previous_filename = null;
    public function sha() : string
    {
        return $this->sha;
    }
    public function filename() : string
    {
        return $this->filename;
    }
    public function status() : string
    {
        return $this->status;
    }
    public function additions() : int
    {
        return $this->additions;
    }
    public function deletions() : int
    {
        return $this->deletions;
    }
    public function changes() : int
    {
        return $this->changes;
    }
    public function blob_url() : string
    {
        return $this->blob_url;
    }
    public function raw_url() : string
    {
        return $this->raw_url;
    }
    public function contents_url() : string
    {
        return $this->contents_url;
    }
    public function patch() : ?string
    {
        return $this->patch;
    }
    public function previous_filename() : ?string
    {
        return $this->previous_filename;
    }
}
