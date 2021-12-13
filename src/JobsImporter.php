<?php

abstract class JobsImporter
{
    private $db;

    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    /* Parse File jobs and return an array of JobEntity */
    abstract protected function parseJobs() :array;
    /* Define source of jobs */
    abstract protected function getSource() :string;

    protected function getFile() :string {
        return $this->file;
    }

    /* Add parse jobs to bdd */
    public function importJobs()
    {

        /* parse XML file */
        $jobs = $this->parseJobs();

        /* import each item */
        $count = 0;
        foreach ($jobs as $job) {
            $req = CmcPDO::getDB()->prepare('INSERT INTO job (reference, title, description, link, company, publishDate, source) VALUES (?, ?, ?, ?, ?, ?, ?)');
            $req->execute([
                $job->getReference(),
                $job->getTitle(),
                $job->getDescription(),
                $job->getLink(),
                $job->getCompany(),
                $job->getPublishDate()->format('Y-m-d H:i:s'),
                $job->getSource()
            ]);
            $count++;
        }
        return $count;
    }
}
