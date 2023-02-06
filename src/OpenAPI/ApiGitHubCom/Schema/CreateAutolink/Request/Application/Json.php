<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateAutolink\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["key_prefix","url_template"],"type":"object","properties":{"key_prefix":{"type":"string","description":"This prefix appended by certain characters will generate a link any time it is found in an issue, pull request, or commit."},"url_template":{"type":"string","description":"The URL must contain `<num>` for the reference number. `<num>` matches different characters depending on the value of `is_alphanumeric`."},"is_alphanumeric":{"type":"boolean","description":"Whether this autolink reference matches alphanumeric characters. If true, the `<num>` parameter of the `url_template` matches alphanumeric characters `A-Z` (case insensitive), `0-9`, and `-`. If false, this autolink reference only matches numeric characters.","default":"true"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CreateAutolink\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * This prefix appended by certain characters will generate a link any time it is found in an issue, pull request, or commit.
     */
    public readonly string $key_prefix;
    /**
     * The URL must contain `<num>` for the reference number. `<num>` matches different characters depending on the value of `is_alphanumeric`.
     */
    public readonly string $url_template;
    /**
     * Whether this autolink reference matches alphanumeric characters. If true, the `<num>` parameter of the `url_template` matches alphanumeric characters `A-Z` (case insensitive), `0-9`, and `-`. If false, this autolink reference only matches numeric characters.
     */
    public readonly ?bool $is_alphanumeric;
    public function __construct(string $key_prefix, string $url_template, bool $is_alphanumeric)
    {
        $this->key_prefix = $key_prefix;
        $this->url_template = $url_template;
        $this->is_alphanumeric = $is_alphanumeric;
    }
}
