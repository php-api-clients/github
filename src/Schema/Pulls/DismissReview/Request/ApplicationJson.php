<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Pulls\DismissReview\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["message"],"type":"object","properties":{"message":{"type":"string","description":"The message for the pull request review dismissal"},"event":{"enum":["DISMISS"],"type":"string","examples":["\\"DISMISS\\""]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated","event":"\\"DISMISS\\""}';

    /**
     * message: The message for the pull request review dismissal
     */
    public function __construct(public string $message, public ?string $event)
    {
    }
}
