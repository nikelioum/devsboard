<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Goutte\Client;

use Symfony\Component\HttpClient\HttpClient;

use App\Models\Job;

class MolyController extends Controller
{


    //Linkedin scrapper
    public function linkedin()
    {

        $client = new Client(HttpClient::create(['verify_peer' => false, 'verify_host' => false]));

        
        //LINKEDIN #WEB DEVELOPERS

         $url="https://www.linkedin.com/jobs/search?keywords=Web%20Design&location=Athens%2C%20Attiki%2C%20Greece&geoId=103077496&trk=public_jobs_jobs-search-bar_search-submit&position=1&pageNum=0";
        
        

            $crawler = $client->request('GET', $url);

            $crawler->filter('div.base-card')->each(function ($node) {

            $job_title =  $node->filter('span.screen-reader-text')->text(); 

            $job_location =  $node->filter('span.job-search-card__location')->text(); 

            $job_url =  $node->filter('a.base-card__full-link')->attr('href');

            $job_company_name =  $node->filter('h4.base-search-card__subtitle > a')->text(); 

            
            if ($checker=Job::where('job_url', $job_url)->exists()) {
            // ...
            }
            else{ 
        
            $job = new Job;

            $job->job_title = $job_title;

            $job->job_location = $job_location;

            $job->job_url = $job_url;

            $job->job_company_name = $job_company_name;

            $job->job_category = "WEB DESIGNER";

            $job->job_website_feed = "LINKEDIN";

            $job->save(); 

            }


        });



        //LINKEDIN #WEB DEVELOPERS


        $url="https://www.linkedin.com/jobs/search?keywords=Web%20Developer&location=Athens%2C%20Attiki%2C%20Greece&geoId=103077496&trk=public_jobs_jobs-search-bar_search-submit&position=1&pageNum=0";
        
        

            $crawler = $client->request('GET', $url);

            $crawler->filter('div.base-card')->each(function ($node) {

            $job_title =  $node->filter('span.screen-reader-text')->text(); 

            $job_location =  $node->filter('span.job-search-card__location')->text(); 

            $job_url =  $node->filter('a.base-card__full-link')->attr('href');

            $job_company_name =  $node->filter('h4.base-search-card__subtitle > a')->text();


            if ($checker=Job::where('job_url', $job_url)->exists()) {
            // ...
            }
            else{  

        
            $job = new Job;

            $job->job_title = $job_title;

            $job->job_location = $job_location;

            $job->job_url = $job_url;

            $job->job_company_name = $job_company_name;

            $job->job_category = "WEB DEVELOPER";

            $job->job_website_feed = "LINKEDIN";

            $job->save(); 

            }


        });





       //INDEED #WEB DEVELOPERS



        $url="https://gr.indeed.com/Developer-jobs?from=relatedQueries&saIdx=3&rqf=1&parentQnorm=Web+Developer";
        
        

            $crawler = $client->request('GET', $url);

            $crawler->filter('A.tapItem')->each(function ($node) {

            $job_title =  $node->filter('h2.jobTitle > span')->text(); 

            $job_location =  $node->filter('div.companyLocation')->text(); 

            $job_url =  $node->filter('a.tapItem')->attr('href');

            $job_company_name =  $node->filter('span.companyName')->text();



            if ($checker=Job::where('job_url', $job_url)->exists()) {
            // ...
            }
            else{ 



        
            $job = new Job;

            $job->job_title = $job_title;

            $job->job_location = $job_location;

            $job->job_url = "https://gr.indeed.com$job_url";

            $job->job_company_name = $job_company_name;        

            $job->job_category = "WEB DEVELOPERS";

            $job->job_website_feed = "INDEED";

            $job->save();

            } 


        });


        



        //INDEED #WEB DESIGNERS



        $url="https://gr.indeed.com/jobs?q=web%20designer&l=";
        
        

            $crawler = $client->request('GET', $url);

            $crawler->filter('A.tapItem')->each(function ($node) {

            $job_title =  $node->filter('h2.jobTitle > span')->text(); 

            $job_location =  $node->filter('div.companyLocation')->text(); 

            $job_url =  $node->filter('a.tapItem')->attr('href');

            $job_company_name =  $node->filter('span.companyName')->text();


            if ($checker=Job::where('job_url', $job_url)->exists()) {
            // ...
            }
            else{ 



        
            $job = new Job;

            $job->job_title = $job_title;

            $job->job_location = $job_location;

            $job->job_url = "https://gr.indeed.com$job_url";

            $job->job_company_name = $job_company_name;        

            $job->job_category = "WEB DESIGNER";

            $job->job_website_feed = "INDEED";

            $job->save();

            } 


        });




        $jobs = Job::all();

        return $jobs;
        
    }
}
