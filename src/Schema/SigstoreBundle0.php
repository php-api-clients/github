<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class SigstoreBundle0
{
    public const SCHEMA_JSON         = '{
    "title": "Sigstore Bundle v0.1",
    "type": "object",
    "properties": {
        "mediaType": {
            "type": "string"
        },
        "verificationMaterial": {
            "type": "object",
            "properties": {
                "x509CertificateChain": {
                    "type": "object",
                    "properties": {
                        "certificates": {
                            "type": "array",
                            "items": {
                                "type": "object",
                                "properties": {
                                    "rawBytes": {
                                        "type": "string"
                                    }
                                }
                            }
                        }
                    }
                },
                "tlogEntries": {
                    "type": "array",
                    "items": {
                        "type": "object",
                        "properties": {
                            "logIndex": {
                                "type": "string"
                            },
                            "logId": {
                                "type": "object",
                                "properties": {
                                    "keyId": {
                                        "type": "string"
                                    }
                                }
                            },
                            "kindVersion": {
                                "type": "object",
                                "properties": {
                                    "kind": {
                                        "type": "string"
                                    },
                                    "version": {
                                        "type": "string"
                                    }
                                }
                            },
                            "integratedTime": {
                                "type": "string"
                            },
                            "inclusionPromise": {
                                "type": "object",
                                "properties": {
                                    "signedEntryTimestamp": {
                                        "type": "string"
                                    }
                                }
                            },
                            "inclusionProof": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "canonicalizedBody": {
                                "type": "string"
                            }
                        }
                    }
                },
                "timestampVerificationData": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        },
        "dsseEnvelope": {
            "type": "object",
            "properties": {
                "payload": {
                    "type": "string"
                },
                "payloadType": {
                    "type": "string"
                },
                "signatures": {
                    "type": "array",
                    "items": {
                        "type": "object",
                        "properties": {
                            "sig": {
                                "type": "string"
                            },
                            "keyid": {
                                "type": "string"
                            }
                        }
                    }
                }
            }
        }
    },
    "description": "Sigstore Bundle v0.1"
}';
    public const SCHEMA_TITLE        = 'Sigstore Bundle v0.1';
    public const SCHEMA_DESCRIPTION  = 'Sigstore Bundle v0.1';
    public const SCHEMA_EXAMPLE_DATA = '{
    "mediaType": "generated",
    "verificationMaterial": {
        "x509CertificateChain": {
            "certificates": [
                {
                    "rawBytes": "generated"
                },
                {
                    "rawBytes": "generated"
                }
            ]
        },
        "tlogEntries": [
            {
                "logIndex": "generated",
                "logId": {
                    "keyId": "generated"
                },
                "kindVersion": {
                    "kind": "generated",
                    "version": "generated"
                },
                "integratedTime": "generated",
                "inclusionPromise": {
                    "signedEntryTimestamp": "generated"
                },
                "inclusionProof": "generated",
                "canonicalizedBody": "generated"
            },
            {
                "logIndex": "generated",
                "logId": {
                    "keyId": "generated"
                },
                "kindVersion": {
                    "kind": "generated",
                    "version": "generated"
                },
                "integratedTime": "generated",
                "inclusionPromise": {
                    "signedEntryTimestamp": "generated"
                },
                "inclusionProof": "generated",
                "canonicalizedBody": "generated"
            }
        ],
        "timestampVerificationData": "generated"
    },
    "dsseEnvelope": {
        "payload": "generated",
        "payloadType": "generated",
        "signatures": [
            {
                "sig": "generated",
                "keyid": "generated"
            },
            {
                "sig": "generated",
                "keyid": "generated"
            }
        ]
    }
}';

    public function __construct(public string|null $mediaType, public Schema\SigstoreBundle0\VerificationMaterial|null $verificationMaterial, public Schema\SigstoreBundle0\DsseEnvelope|null $dsseEnvelope)
    {
    }
}
