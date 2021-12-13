<?php

class TeaserJobsImporter extends JobsImporter
{
    public function getSource() :string {
        return 'jobteaser';
    }

    /* Parse File jobs and return an array of JobEntity */
    public function parseJobs () :array
    {
        $xml = simplexml_load_file($this->getFile());
        $jobs = [];
        foreach ($xml->offer as $item) {
            $job = (new JobEntity())
                ->setReference($item->reference)
                ->setDescription($item->description)
                ->setLink($item->link)
                ->setTitle($item->title)
                ->setCompany($item->companyname)
                ->setPublishDate(new DateTime($item->publisheddate))
                ->setSource($this->getSource())
            ;
            $jobs[] = $job;
        }
        return $jobs;
    }
}
