<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstractb36e5d9fb48a23c0265b773098ea5b1e
{
    public const SCHEMA_JSON         = '{"required":["alt","image_url"],"type":"object","properties":{"alt":{"type":"string","description":"The alternative text for the image."},"image_url":{"type":"string","description":"The full URL of the image."},"caption":{"type":"string","description":"A short image description."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"alt":"generated_alt_null","image_url":"generated_image_url_null","caption":"generated_caption_null"}';

    /**
     * alt: The alternative text for the image.
     * imageUrl: The full URL of the image.
     * caption: A short image description.
     */
    public function __construct(public string $alt, #[MapFrom('image_url')] public string $imageUrl, public ?string $caption)
    {
    }
}
