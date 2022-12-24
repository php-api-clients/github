<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C18Dd3E94D7B61928C72A44D4D82Cd958
{
    public const SCHEMA_JSON = '{"required":["text"],"type":"object","properties":{"text":{"type":"string","description":"The Markdown text to render in HTML."},"mode":{"enum":["markdown","gfm"],"type":"string","description":"The rendering mode. Can be either `markdown` or `gfm`.","default":"markdown","examples":["markdown"]},"context":{"type":"string","description":"The repository context to use when creating references in `gfm` mode.  For example, setting `context` to `octo-org\\/octo-repo` will change the text `#42` into an HTML link to issue 42 in the `octo-org\\/octo-repo` repository."}}}';
    public const SCHEMA_TITLE = 'c_18dd3e94d7b61928c72a44d4d82cd958';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The Markdown text to render in HTML.
     */
    private string $text;
    /**
     * The rendering mode. Can be either `markdown` or `gfm`.
     */
    private ?string $mode = null;
    /**
     * The repository context to use when creating references in `gfm` mode.  For example, setting `context` to `octo-org/octo-repo` will change the text `#42` into an HTML link to issue 42 in the `octo-org/octo-repo` repository.
     */
    private ?string $context = null;
    /**
     * The Markdown text to render in HTML.
     */
    public function text() : string
    {
        return $this->text;
    }
    /**
     * The rendering mode. Can be either `markdown` or `gfm`.
     */
    public function mode() : ?string
    {
        return $this->mode;
    }
    /**
     * The repository context to use when creating references in `gfm` mode.  For example, setting `context` to `octo-org/octo-repo` will change the text `#42` into an HTML link to issue 42 in the `octo-org/octo-repo` repository.
     */
    public function context() : ?string
    {
        return $this->context;
    }
}
