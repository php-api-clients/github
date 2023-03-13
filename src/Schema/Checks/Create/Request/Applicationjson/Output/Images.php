<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Checks\Create\Request\Applicationjson\Output;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Images
{
    public const SCHEMA_JSON = '{"required":["alt","image_url"],"type":"object","properties":{"alt":{"type":"string","description":"The alternative text for the image."},"image_url":{"type":"string","description":"The full URL of the image."},"caption":{"type":"string","description":"A short image description."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"alt":"generated_alt","image_url":"generated_image_url","caption":"generated_caption"}';
    /**
     * alt: The alternative text for the image.
     * image_url: The full URL of the image.
     * caption: A short image description.
     */
    public function __construct(public string $alt, public string $image_url, public ?string $caption)
    {
    }
}
