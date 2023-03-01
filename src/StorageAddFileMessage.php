<?php

declare(strict_types=1);

namespace Netlogix\DataHandlerQueueMessages;

use JsonSerializable;

final class StorageAddFileMessage implements JsonSerializable
{
    protected string $originPathAndFileName;
    protected int $targetStorageUid;
    protected string $targetPath;
    protected string $targetFileName;

    public function __construct(
        string $originPathAndFileName,
        int $targetStorageUid,
        string $targetPath,
        string $targetFileName
    ) {
        $this->originPathAndFileName = $originPathAndFileName;
        $this->targetStorageUid = $targetStorageUid;
        $this->targetPath = $targetPath;
        $this->targetFileName = $targetFileName;
    }

    public function getOriginPathAndFileName(): string
    {
        return $this->originPathAndFileName;
    }

    public function getTargetStorageUid(): int
    {
        return $this->targetStorageUid;
    }

    public function getTargetPath(): string
    {
        return $this->targetPath;
    }

    public function getTargetFileName(): string
    {
        return $this->targetFileName;
    }

    public function jsonSerialize(): array
    {
        return [
            'originPathAndFileName' => $this->originPathAndFileName,
            'targetStorageUid' => $this->targetStorageUid,
            'targetPath' => $this->targetPath,
            'targetFileName' => $this->targetFileName
        ];
    }
}
