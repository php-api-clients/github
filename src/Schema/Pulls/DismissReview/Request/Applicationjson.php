<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Pulls\DismissReview\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["message"],"type":"object","properties":{"message":{"type":"string","description":"The message for the pull request review dismissal"},"event":{"enum":["DISMISS"],"type":"string","examples":["\\"DISMISS\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message","event":"\\"DISMISS\\""}';
    /**
     * message: The message for the pull request review dismissal
     */
    public function __construct(public ?string $message, public string $event)
    {
    }
}
