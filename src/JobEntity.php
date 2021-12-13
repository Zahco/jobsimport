<?php

/* Simple model of Job */
class JobEntity
{
    /* Reference of Job */
    private $reference;
    /* Description of Job */
    private $description;
    /* External link of Job */
    private $link;
    /* Title of Job */
    private $title;
    /* Company name of Job */
    private $company;
    /* Publication date of Job */
    private $publishDate;
    /* Source of Job */
    private $source;

    public function getReference() :string {
        return $this->reference;
    }

    public function setReference(string $reference) :self {
        $this->reference = $reference;
        return $this;
    }

    public function getDescription() :string {
        return $this->description;
    }

    public function setDescription(string $description) :self {
        $this->description = $description;
        return $this;
    }

    public function getLink() :string {
        return $this->link;
    }

    public function setLink(string $link) :self {
        $this->link = $link;
        return $this;
    }

    public function getTitle() :string {
        return $this->title;
    }

    public function setTitle(string $title) :self {
        $this->title = $title;
        return $this;
    }

    public function getCompany() :string {
        return $this->company;
    }

    public function setCompany(string $company) :self {
        $this->company = $company;
        return $this;
    }

    public function getPublishDate() :DateTime {
        return $this->publishDate;
    }

    public function setPublishDate(DateTime $publishDate) :self {
        $this->publishDate = $publishDate;
        return $this;
    }

    public function getSource() :string {
        return $this->source;
    }

    public function setSource(string $source) :self {
        $this->source = $source;
        return $this;
    }
}