<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Render\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["text"],"type":"object","properties":{"text":{"type":"string","description":"The Markdown text to render in HTML."},"mode":{"enum":["markdown","gfm"],"type":"string","description":"The rendering mode.","default":"markdown","examples":["markdown"]},"context":{"type":"string","description":"The repository context to use when creating references in `gfm` mode.  For example, setting `context` to `octo-org\\/octo-repo` will change the text `#42` into an HTML link to issue 42 in the `octo-org\\/octo-repo` repository."}}}';
    public const SCHEMA_TITLE = 'Render\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The Markdown text to render in HTML.
     */
    private string $text;
    /**
     * The rendering mode.
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
     * The rendering mode.
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
