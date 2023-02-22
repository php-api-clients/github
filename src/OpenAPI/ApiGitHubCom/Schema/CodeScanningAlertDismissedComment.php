<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class CodeScanningAlertDismissedComment
{
    public const SCHEMA_JSON = '{"maxLength":280,"type":["string","null"],"description":"The dismissal comment associated with the dismissal of the alert."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The dismissal comment associated with the dismissal of the alert.';
    public function __construct()
    {
    }
}
