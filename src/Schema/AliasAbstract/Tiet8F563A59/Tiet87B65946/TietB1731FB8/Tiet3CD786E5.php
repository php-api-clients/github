<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet8F563A59\Tiet87B65946\TietB1731FB8;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet3CD786E5
{
    public const SCHEMA_JSON         = '{"required":["vector_string","score"],"type":["object","null"],"properties":{"vector_string":{"type":["string","null"],"description":"The CVSS vector."},"score":{"maximum":10,"minimum":0,"type":["number","null"],"description":"The CVSS score.","readOnly":true}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"vector_string":"generated","score":0.5}';

    /**
     * vectorString: The CVSS vector.
     * score: The CVSS score.
     */
    public function __construct(#[MapFrom('vector_string')]
    public string|null $vectorString, public int|float|null $score,)
    {
    }
}
