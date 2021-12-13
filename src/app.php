<?php

/************************************
Entry point of the project.
To be run from the command line.
************************************/


define('RESSOURCES_DIR', __DIR__ . '/../resources/');


function __autoload(string $classname) {
    include_once(__DIR__ . '/' . $classname . '.php');
}


echo sprintf("Starting...\n");
CmcPDO::clearDb();

/* import jobs from regionsjob.xml */
$regionsJobsImporter = new RegionsJobsImporter(RESSOURCES_DIR . 'regionsjob.xml');
$teaserJobsImporter = new TeaserJobsImporter(RESSOURCES_DIR . 'jobteaser.xml');

$count = 0;
$count += $regionsJobsImporter->importJobs();
$count += $teaserJobsImporter->importJobs();

echo sprintf("> %d jobs imported.\n", $count);


/* list jobs */
$jobsLister = new JobsLister();
$jobs = $jobsLister->listJobs();

echo sprintf("> all jobs (%d):\n", count($jobs));
foreach ($jobs as $job) {
    echo sprintf(" %d: %s - %s - %s [%s]\n", $job['id'], $job['reference'], $job['title'], $job['publishDate'], $job['source']);
}


echo sprintf("Done.\n");
