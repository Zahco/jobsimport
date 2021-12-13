<?php

class RegionsJobsImporter extends JobsImporter
{
    public function getSource() :string {
        return 'regionsjob';
    }

    /* Parse File jobs and return an array of JobEntity */
    public function parseJobs () :array
    {
        $xml = simplexml_load_file($this->getFile());
        $jobs = [];
        foreach ($xml->item as $item) {
            $job = (new JobEntity())
                ->setReference($item->ref)
                ->setDescription($item->description)
                ->setLink($item->url)
                ->setTitle($item->title)
                ->setCompany($item->company)
                ->setPublishDate(new DateTime($item->pubDate))
                ->setSource($this->getSource())
            ;
            $jobs[] = $job;
        }
        return $jobs;
    }
}
