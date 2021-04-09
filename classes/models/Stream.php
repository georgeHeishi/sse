<?php


class Stream
{
    private int $id;
    private bool $y1;
    private bool $y2;
    private bool $y3;
    private string $timestamp;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return bool
     */
    public function isY1(): bool
    {
        return $this->y1;
    }

    /**
     * @param bool $y1
     */
    public function setY1(bool $y1): void
    {
        $this->y1 = $y1;
    }

    /**
     * @return bool
     */
    public function isY2(): bool
    {
        return $this->y2;
    }

    /**
     * @param bool $y2
     */
    public function setY2(bool $y2): void
    {
        $this->y2 = $y2;
    }

    /**
     * @return bool
     */
    public function isY3(): bool
    {
        return $this->y3;
    }

    /**
     * @param bool $y3
     */
    public function setY3(bool $y3): void
    {
        $this->y3 = $y3;
    }

    /**
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     */
    public function setTimestamp(string $timestamp): void
    {
        $this->timestamp = $timestamp;
    }


}