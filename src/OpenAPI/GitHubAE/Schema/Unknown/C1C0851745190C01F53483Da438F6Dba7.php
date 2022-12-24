<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C1C0851745190C01F53483Da438F6Dba7
{
    public const SCHEMA_JSON = '{"required":["key_prefix","url_template"],"type":"object","properties":{"key_prefix":{"type":"string","description":"The prefix appended by a number will generate a link any time it is found in an issue, pull request, or commit."},"url_template":{"type":"string","description":"The URL must contain `<num>` for the reference number."},"is_alphanumeric":{"type":"boolean","description":"Whether this autolink reference matches alphanumeric characters. If true, the `<num>` parameter of the `url_template` matches alphanumeric characters `A-Z` (case insensitive), `0-9`, and `-`. If false, this autolink reference only matches numeric characters.","default":"true"}}}';
    public const SCHEMA_TITLE = 'c_1c0851745190c01f53483da438f6dba7';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The prefix appended by a number will generate a link any time it is found in an issue, pull request, or commit.
     */
    private string $key_prefix;
    /**
     * The URL must contain `<num>` for the reference number.
     */
    private string $url_template;
    /**
     * Whether this autolink reference matches alphanumeric characters. If true, the `<num>` parameter of the `url_template` matches alphanumeric characters `A-Z` (case insensitive), `0-9`, and `-`. If false, this autolink reference only matches numeric characters.
     */
    private ?bool $is_alphanumeric = null;
    /**
     * The prefix appended by a number will generate a link any time it is found in an issue, pull request, or commit.
     */
    public function key_prefix() : string
    {
        return $this->key_prefix;
    }
    /**
     * The URL must contain `<num>` for the reference number.
     */
    public function url_template() : string
    {
        return $this->url_template;
    }
    /**
     * Whether this autolink reference matches alphanumeric characters. If true, the `<num>` parameter of the `url_template` matches alphanumeric characters `A-Z` (case insensitive), `0-9`, and `-`. If false, this autolink reference only matches numeric characters.
     */
    public function is_alphanumeric() : ?bool
    {
        return $this->is_alphanumeric;
    }
}
