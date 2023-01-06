<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListAnnotations\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Check Annotation","required":["path","blob_href","start_line","end_line","start_column","end_column","annotation_level","title","message","raw_details"],"type":"object","properties":{"path":{"type":"string","examples":["README.md"]},"start_line":{"type":"integer","examples":[2]},"end_line":{"type":"integer","examples":[2]},"start_column":{"type":["integer","null"],"examples":[5]},"end_column":{"type":["integer","null"],"examples":[10]},"annotation_level":{"type":["string","null"],"examples":["warning"]},"title":{"type":["string","null"],"examples":["Spell Checker"]},"message":{"type":["string","null"],"examples":["Check your spelling for \'banaas\'."]},"raw_details":{"type":["string","null"],"examples":["Do you mean \'bananas\' or \'banana\'?"]},"blob_href":{"type":"string"}},"description":"Check Annotation"}}';
    public const SCHEMA_TITLE = 'ListAnnotations\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
