<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Pulls\DismissReview\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["message"],"type":"object","properties":{"message":{"type":"string","description":"The message for the pull request review dismissal"},"event":{"enum":["DISMISS"],"type":"string","examples":["\\"DISMISS\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","event":"\\"DISMISS\\""}';
    /**
     * message: The message for the pull request review dismissal
     */
    public function __construct(public string $message, public ?string $event)
    {
    }
}
