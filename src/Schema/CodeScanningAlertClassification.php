<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class CodeScanningAlertClassification
{
    public const SCHEMA_JSON = '{"enum":["source","generated","test","library",null],"type":["string","null"],"description":"A classification of the file. For example to identify it as generated."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'A classification of the file. For example to identify it as generated.';
    public function __construct()
    {
    }
}
