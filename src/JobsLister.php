<?php

class JobsLister
{
    private $db;

    public function listJobs()
    {
        $jobs = CmcPDO::getDB()->query('SELECT id, reference, title, description, link, company, publishDate, source FROM job')->fetchAll(PDO::FETCH_ASSOC);
        return $jobs;
    }
}
