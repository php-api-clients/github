<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarkNotificationsAsRead;

final class Request
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"last_read_at":{"type":"string","description":"Describes the last point that notifications were checked. Anything updated since this time will not be marked as read. If you omit this parameter, all notifications are marked as read. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. Default: The current timestamp.","format":"date-time"},"read":{"type":"boolean","description":"Whether the notification has been read."}}}';
    public const SCHEMA_TITLE = 'MarkNotificationsAsRead\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Describes the last point that notifications were checked. Anything updated since this time will not be marked as read. If you omit this parameter, all notifications are marked as read. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. Default: The current timestamp.
     */
    private string $last_read_at;
    /**
     * Whether the notification has been read.
     */
    private bool $read;
    /**
     * Describes the last point that notifications were checked. Anything updated since this time will not be marked as read. If you omit this parameter, all notifications are marked as read. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. Default: The current timestamp.
     */
    public function last_read_at() : string
    {
        return $this->last_read_at;
    }
    /**
     * Whether the notification has been read.
     */
    public function read() : bool
    {
        return $this->read;
    }
}
