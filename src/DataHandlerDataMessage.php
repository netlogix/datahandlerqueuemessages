<?php

declare(strict_types=1);

namespace Netlogix\DataHandlerQueueMessages;

use JsonSerializable;

final class DataHandlerDataMessage implements JsonSerializable
{
    protected string $tableName;
    protected string $uid;
    protected array $record;

    public function __construct(
        string $tableName,
        string $uid,
        array $record
    ) {
        $this->tableName = $tableName;
        $this->uid = $uid;
        $this->record = $record;
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }

    public function getUid(): string
    {
        return $this->uid;
    }

    public function getRecord(): array
    {
        return $this->record;
    }

    public function jsonSerialize(): array
    {
        return [
            'tableName' => $this->tableName,
            'uid' => $this->uid,
            'record' => $this->record
        ];
    }
}
