<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Autolink
{
    public const SCHEMA_JSON = '{"title":"Autolink reference","required":["id","key_prefix","url_template","is_alphanumeric"],"type":"object","properties":{"id":{"type":"integer","examples":[3]},"key_prefix":{"type":"string","description":"The prefix of a key that is linkified.","examples":["TICKET-"]},"url_template":{"type":"string","description":"A template for the target URL that is generated if a key was found.","examples":["https:\\/\\/example.com\\/TICKET?query=<num>"]},"is_alphanumeric":{"type":"boolean","description":"Whether this autolink reference matches alphanumeric characters. If false, this autolink reference only matches numeric characters.","examples":[true]}},"description":"An autolink reference."}';
    public const SCHEMA_TITLE = 'Autolink reference';
    public const SCHEMA_DESCRIPTION = 'An autolink reference.';
    public readonly int $id;
    /**
     * The prefix of a key that is linkified.
     */
    public readonly string $key_prefix;
    /**
     * A template for the target URL that is generated if a key was found.
     */
    public readonly string $url_template;
    /**
     * Whether this autolink reference matches alphanumeric characters. If false, this autolink reference only matches numeric characters.
     */
    public readonly bool $is_alphanumeric;
    public function __construct(int $id, string $key_prefix, string $url_template, bool $is_alphanumeric)
    {
        $this->id = $id;
        $this->key_prefix = $key_prefix;
        $this->url_template = $url_template;
        $this->is_alphanumeric = $is_alphanumeric;
    }
}
