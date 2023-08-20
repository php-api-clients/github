<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class FileCommit
{
    public const SCHEMA_JSON         = '{
    "title": "File Commit",
    "required": [
        "content",
        "commit"
    ],
    "type": "object",
    "properties": {
        "content": {
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "name": {
                    "type": "string"
                },
                "path": {
                    "type": "string"
                },
                "sha": {
                    "type": "string"
                },
                "size": {
                    "type": "integer"
                },
                "url": {
                    "type": "string"
                },
                "html_url": {
                    "type": "string"
                },
                "git_url": {
                    "type": "string"
                },
                "download_url": {
                    "type": "string"
                },
                "type": {
                    "type": "string"
                },
                "_links": {
                    "type": "object",
                    "properties": {
                        "self": {
                            "type": "string"
                        },
                        "git": {
                            "type": "string"
                        },
                        "html": {
                            "type": "string"
                        }
                    }
                }
            }
        },
        "commit": {
            "type": "object",
            "properties": {
                "sha": {
                    "type": "string"
                },
                "node_id": {
                    "type": "string"
                },
                "url": {
                    "type": "string"
                },
                "html_url": {
                    "type": "string"
                },
                "author": {
                    "type": "object",
                    "properties": {
                        "date": {
                            "type": "string"
                        },
                        "name": {
                            "type": "string"
                        },
                        "email": {
                            "type": "string"
                        }
                    }
                },
                "committer": {
                    "type": "object",
                    "properties": {
                        "date": {
                            "type": "string"
                        },
                        "name": {
                            "type": "string"
                        },
                        "email": {
                            "type": "string"
                        }
                    }
                },
                "message": {
                    "type": "string"
                },
                "tree": {
                    "type": "object",
                    "properties": {
                        "url": {
                            "type": "string"
                        },
                        "sha": {
                            "type": "string"
                        }
                    }
                },
                "parents": {
                    "type": "array",
                    "items": {
                        "type": "object",
                        "properties": {
                            "url": {
                                "type": "string"
                            },
                            "html_url": {
                                "type": "string"
                            },
                            "sha": {
                                "type": "string"
                            }
                        }
                    }
                },
                "verification": {
                    "type": "object",
                    "properties": {
                        "verified": {
                            "type": "boolean"
                        },
                        "reason": {
                            "type": "string"
                        },
                        "signature": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "payload": {
                            "type": [
                                "string",
                                "null"
                            ]
                        }
                    }
                }
            }
        }
    },
    "description": "File Commit"
}';
    public const SCHEMA_TITLE        = 'File Commit';
    public const SCHEMA_DESCRIPTION  = 'File Commit';
    public const SCHEMA_EXAMPLE_DATA = '{
    "content": {
        "name": "generated",
        "path": "generated",
        "sha": "generated",
        "size": 4,
        "url": "generated",
        "html_url": "generated",
        "git_url": "generated",
        "download_url": "generated",
        "type": "generated",
        "_links": {
            "self": "generated",
            "git": "generated",
            "html": "generated"
        }
    },
    "commit": {
        "sha": "generated",
        "node_id": "generated",
        "url": "generated",
        "html_url": "generated",
        "author": {
            "date": "generated",
            "name": "generated",
            "email": "generated"
        },
        "committer": {
            "date": "generated",
            "name": "generated",
            "email": "generated"
        },
        "message": "generated",
        "tree": {
            "url": "generated",
            "sha": "generated"
        },
        "parents": [
            {
                "url": "generated",
                "html_url": "generated",
                "sha": "generated"
            },
            {
                "url": "generated",
                "html_url": "generated",
                "sha": "generated"
            }
        ],
        "verification": {
            "verified": false,
            "reason": "generated",
            "signature": "generated",
            "payload": "generated"
        }
    }
}';

    public function __construct(public Schema\FileCommit\Content|null $content, public Schema\FileCommit\Commit $commit)
    {
    }
}
