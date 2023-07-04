<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Markdown\Render\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["text"],"type":"object","properties":{"text":{"type":"string","description":"The Markdown text to render in HTML."},"mode":{"enum":["markdown","gfm"],"type":"string","description":"The rendering mode.","default":"markdown","examples":["markdown"]},"context":{"type":"string","description":"The repository context to use when creating references in `gfm` mode.  For example, setting `context` to `octo-org\\/octo-repo` will change the text `#42` into an HTML link to issue 42 in the `octo-org\\/octo-repo` repository."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"text":"generated","mode":"markdown","context":"generated"}';

    /**
     * text: The Markdown text to render in HTML.
     * mode: The rendering mode.
     * context: The repository context to use when creating references in `gfm` mode.  For example, setting `context` to `octo-org/octo-repo` will change the text `#42` into an HTML link to issue 42 in the `octo-org/octo-repo` repository.
     */
    public function __construct(public string $text, public string|null $mode, public string|null $context)
    {
    }
}
