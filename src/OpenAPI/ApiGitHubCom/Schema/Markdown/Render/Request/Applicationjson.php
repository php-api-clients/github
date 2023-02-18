<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Markdown\Render\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["text"],"type":"object","properties":{"text":{"type":"string","description":"The Markdown text to render in HTML."},"mode":{"enum":["markdown","gfm"],"type":"string","description":"The rendering mode.","default":"markdown","examples":["markdown"]},"context":{"type":"string","description":"The repository context to use when creating references in `gfm` mode.  For example, setting `context` to `octo-org\\/octo-repo` will change the text `#42` into an HTML link to issue 42 in the `octo-org\\/octo-repo` repository."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The Markdown text to render in HTML.
     */
    public ?string $text;
    /**
     * The rendering mode.
     */
    public string $mode;
    /**
     * The repository context to use when creating references in `gfm` mode.  For example, setting `context` to `octo-org/octo-repo` will change the text `#42` into an HTML link to issue 42 in the `octo-org/octo-repo` repository.
     */
    public string $context;
    public function __construct(string $text, string $mode, string $context)
    {
        $this->text = $text;
        $this->mode = $mode;
        $this->context = $context;
    }
}
