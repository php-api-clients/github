<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListFiles\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Diff Entry","required":["additions","blob_url","changes","contents_url","deletions","filename","raw_url","sha","status"],"type":"object","properties":{"sha":{"type":"string","examples":["bbcd538c8e72b8c175046e27cc8f907076331401"]},"filename":{"type":"string","examples":["file1.txt"]},"status":{"enum":["added","removed","modified","renamed","copied","changed","unchanged"],"type":"string","examples":["added"]},"additions":{"type":"integer","examples":[103]},"deletions":{"type":"integer","examples":[21]},"changes":{"type":"integer","examples":[124]},"blob_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/blob\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt"]},"raw_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/raw\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt"]},"contents_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/file1.txt?ref=6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"patch":{"type":"string","examples":["@@ -132,7 +132,7 @@ module Test @@ -1000,7 +1000,7 @@ module Test"]},"previous_filename":{"type":"string","examples":["file.txt"]}},"description":"Diff Entry"}}';
    public const SCHEMA_TITLE = 'ListFiles\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
