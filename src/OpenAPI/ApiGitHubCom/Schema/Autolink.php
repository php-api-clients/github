<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Autolink
{
    public const SCHEMA_JSON = '{"title":"Autolink reference","required":["id","key_prefix","url_template","is_alphanumeric"],"type":"object","properties":{"id":{"type":"integer","examples":[3]},"key_prefix":{"type":"string","description":"The prefix of a key that is linkified.","examples":["TICKET-"]},"url_template":{"type":"string","description":"A template for the target URL that is generated if a key was found.","examples":["https:\\/\\/example.com\\/TICKET?query=<num>"]},"is_alphanumeric":{"type":"boolean","description":"Whether this autolink reference matches alphanumeric characters. If false, this autolink reference only matches numeric characters.","examples":[true]}},"description":"An autolink reference."}';
    public const SCHEMA_TITLE = 'Autolink reference';
    public const SCHEMA_DESCRIPTION = 'An autolink reference.';
    private int $id;
    /**
     * The prefix of a key that is linkified.
     */
    private string $key_prefix;
    /**
     * A template for the target URL that is generated if a key was found.
     */
    private string $url_template;
    /**
     * Whether this autolink reference matches alphanumeric characters. If false, this autolink reference only matches numeric characters.
     */
    private bool $is_alphanumeric;
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The prefix of a key that is linkified.
     */
    public function key_prefix() : string
    {
        return $this->key_prefix;
    }
    /**
     * A template for the target URL that is generated if a key was found.
     */
    public function url_template() : string
    {
        return $this->url_template;
    }
    /**
     * Whether this autolink reference matches alphanumeric characters. If false, this autolink reference only matches numeric characters.
     */
    public function is_alphanumeric() : bool
    {
        return $this->is_alphanumeric;
    }
}
