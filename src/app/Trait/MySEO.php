<?php

namespace App\Trait;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

trait MySEO
{
    public $baseUrl = 'https://www.egoliworldbusiness.co/';

    public function setSeoData($title, $description, $url = '', $imageUrl = null, $twitterType = 'summary', $keywords = [])
    {
        SEOTools::setTitle($title, false);
        SEOTools::setDescription($description);

        OpenGraph::setUrl($this->baseUrl .''. $url);
        OpenGraph::setTitle($title);
        OpenGraph::setDescription($description);
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'pt-PT');
        OpenGraph::addProperty('locale:alternate', config('app.locale'));

        TwitterCard::setTitle($title);
        TwitterCard::setSite('@egoliworldbusiness');
        TwitterCard::setDescription($description);
        TwitterCard::setUrl($this->baseUrl .''. $url);

        // Definir palavras-chave (keywords)
        if (!empty($keywords)) {
            SEOMeta::addKeyword($keywords);
        }

        if ($imageUrl) {
            TwitterCard::setImage($imageUrl ?? public_path('assets/img/logo-blue.png'));
            OpenGraph::addImage($imageUrl ?? public_path('assets/img/logo-blue.png'));
        }

        if ($twitterType) {
            TwitterCard::setType($twitterType);
        }
    }

    public function setSeoBlogs($title, $description, $url, $imageUrl = null, $twitterType = 'card', $keywords = [])
    {
        SEOMeta::setTitle($title, false);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical($url);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($title);
        OpenGraph::setUrl($url);
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle($title);
        TwitterCard::setSite('@egoliworldbusiness');
        TwitterCard::setDescription($description);
        TwitterCard::setUrl($this->baseUrl .'/post');

        JsonLd::setTitle($title);
        JsonLd::setDescription($description);


        SEOTools::openGraph()->addProperty('locale', 'pt-PT');
        SEOTools::openGraph()->addProperty('locale:alternate', config('app.locale'));

        // Definir palavras-chave (keywords)
        if (!empty($keywords)) {
            SEOMeta::addKeyword($keywords);
        }

        if ($imageUrl) {
            OpenGraph::addImage($imageUrl);
            TwitterCard::setImage($imageUrl);
            JsonLd::addImage($imageUrl);
        }

        if ($twitterType) {
            TwitterCard::setType($twitterType);
        }
    }

    public function setSeoBlog(Post $post, $urlsImages = [], $twitterType = 'card', $keywords = [])
    {
        SEOMeta::setTitle($post->title, false);
        SEOMeta::setDescription($post->description);
        SEOMeta::addMeta('article:published_time', $post->created_at->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', $post->categories()->first()->title, 'property');

        OpenGraph::setDescription($post->description);
        OpenGraph::setTitle($post->title);
        OpenGraph::setUrl($this->baseUrl .'/post/'.$post->slug);
        OpenGraph::addProperty('type', 'article');

        TwitterCard::setDescription($post->description);
        TwitterCard::setSite('@egoliworldbusiness');
        TwitterCard::setUrl($this->baseUrl .'/post/'.$post->slug);

        JsonLd::setTitle($post->title);
        JsonLd::setDescription($post->description);
        JsonLd::setType('Article');

        SEOTools::openGraph()->addProperty('locale', 'pt-PT');
        SEOTools::openGraph()->addProperty('locale:alternate', config('app.locale'));

        // Definir palavras-chave (keywords)
        if (!empty($keywords)) {
            $words = $post->keywords->toArray() ?? [];
            $words += $keywords;
            SEOMeta::addKeyword($words);
        }

        if ($post->getFirstMediaUrl('blogs-cover')) {
            OpenGraph::addImage($post->getFirstMediaUrl('blogs-cover'));
            OpenGraph::addImage(['url' => $post->getFirstMediaUrl('blogs-cover'), 'size' => 300]);
            OpenGraph::addImage($post->getFirstMediaUrl('blogs-cover'), ['height' => 300, 'width' => 300]);
            TwitterCard::setImage($post->getFirstMediaUrl('blogs-cover'));
        }

        if(!empty($urlsImages)) {
            OpenGraph::addImage($urlsImages);
            JsonLd::addImage($urlsImages);
        }

        if ($twitterType) {
            TwitterCard::setType($twitterType);
        }
    }

    public function setSeoProject(Project $project, $urlsImages = [], $twitterType = 'card', $keywords = [])
    {
        SEOMeta::setTitle($project->title, false);
        SEOMeta::setDescription($project->description);
        SEOMeta::addMeta('article:published_time', $project->created_at->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', $project->category->title, 'property');

        OpenGraph::setDescription($project->description);
        OpenGraph::setTitle($project->title);
        OpenGraph::setUrl($this->baseUrl .'/portfolio/'.$project->slug);
        OpenGraph::addProperty('type', 'article');

        TwitterCard::setDescription($project->description);
        TwitterCard::setSite('@egoliworldbusiness');
        TwitterCard::setUrl($this->baseUrl .'/portfolio/'.$project->slug);

        JsonLd::setTitle($project->title);
        JsonLd::setDescription($project->description);
        JsonLd::setType('Article');

        SEOTools::openGraph()->addProperty('locale', 'pt-PT');
        SEOTools::openGraph()->addProperty('locale:alternate', config('app.locale'));

        // Definir palavras-chave (keywords)
        if (!empty($keywords)) {
            $words = $project->keywords->toArray() ?? [];
            $words += $keywords;
            SEOMeta::addKeyword($words);
        }

        if ($project->getFirstMediaUrl('project-cover')) {
            OpenGraph::addImage($project->getFirstMediaUrl('project-cover'));
            OpenGraph::addImage(['url' => $project->getFirstMediaUrl('project-cover'), 'size' => 300]);
            OpenGraph::addImage($project->getFirstMediaUrl('project-cover'), ['height' => 300, 'width' => 300]);
            TwitterCard::setImage($project->getFirstMediaUrl('project-cover'));
        }

        if(!empty($urlsImages)) {
            OpenGraph::addImage($urlsImages);
            JsonLd::addImage($urlsImages);
        }

        if ($twitterType) {
            TwitterCard::setType($twitterType);
        }
    }

    public function setSeoService(Service $service, $urlsImages = [], $twitterType = 'card', $keywords = [])
    {
        SEOMeta::setTitle($service->title, false);
        SEOMeta::setDescription($service->description);
        SEOMeta::addMeta('article:published_time', $service->created_at->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', $service->categories->first()->title ?? 'Inside Linked', 'property');

        OpenGraph::setDescription($service->description);
        OpenGraph::setTitle($service->title);
        OpenGraph::setUrl('https://egoliworldbusiness.com/service/'.$service->slug);
        OpenGraph::addProperty('type', 'article');

        TwitterCard::setDescription($service->description);
        TwitterCard::setSite('@egoliworldbusiness');
        TwitterCard::setUrl('https://egoliworldbusiness.com/service/'.$service->slug);

        JsonLd::setTitle($service->title);
        JsonLd::setDescription($service->description);
        JsonLd::setType('Article');

        SEOTools::openGraph()->addProperty('locale', 'pt-PT');
        SEOTools::openGraph()->addProperty('locale:alternate', config('app.locale'));

        // Definir palavras-chave (keywords)
        if (!empty($keywords)) {
            $words = $service->keywords->toArray() ??  [];
            $words += $keywords;
            SEOMeta::addKeyword($words);
        }

        if ($service->getFirstMediaUrl('services-banners')) {
            OpenGraph::addImage($service->getFirstMediaUrl('services-banners'));
            OpenGraph::addImage(['url' => $service->getFirstMediaUrl('services-banners'), 'size' => 300]);
            OpenGraph::addImage($service->getFirstMediaUrl('services-banners'), ['height' => 300, 'width' => 300]);
            TwitterCard::setImage($service->getFirstMediaUrl('services-banners'));
        }

        if(!empty($urlsImages)) {
            OpenGraph::addImage($urlsImages);
            JsonLd::addImage($urlsImages);
        }

        if ($twitterType) {
            TwitterCard::setType($twitterType);
        }
    }

}
