<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public $theme_name;

    public function __construct()
    {
        $this->theme_name = 'default';
    }

    public function index()
    {
        // $blocks = Page::with('blocks')->whereLink('home')->first()->blocks->sortBy('blockIndex');
        // $page = 'page';
        // if(file_exists(resource_path('views/themes/'.$this->theme_name.'/index.blade.php'))){ $page = 'index'; }
        return view('themes.'.$this->theme_name.'.index');
    }

    public function about()
    {
        $blocks = Page::with('blocks')->whereLink('about')->first()->blocks->sortBy('blockIndex');
        $title = get_site('about_title');
        $subtitle = get_site('about_subtitle');
        $page = 'page';
        if(file_exists(resource_path('views/themes/'.$this->theme_name.'/about.blade.php'))){ $page = 'about'; }
    	return view('themes.'.$this->theme_name.'.'.$page, compact('blocks', 'title', 'subtitle'));
    }

    public function contact()
    {
        $blocks = Page::with('blocks')->whereLink('contact')->first()->blocks->sortBy('blockIndex');
        $title = get_site('contact_title');
        $subtitle = get_site('contact_subtitle');
        $page = 'page';
        if(file_exists(resource_path('views/themes/'.$this->theme_name.'/contact.blade.php'))){ $page = 'contact'; }
        return view('themes.'.$this->theme_name.'.'.$page, compact('blocks', 'title', 'subtitle'));
    }

    public function contactUs()
    {
        return back()->withSuccess('Thanks for contacting us, we will get back to you shortly');
    }

    public function events()
    {
        return view('themes.'.$this->theme_name.'.event');
    }

    // public function page($page)
    // {
    //     $page = Post::whereSlug($page)->first();
    //     if($page){ return view('themes.'.$this->theme_name.'.page', compact('page')); }
    //     return abort('404');
    // }

    public function post($post)
    {
        $post = Post::whereSlug($post)->first();
        if(!file_exists(resource_path('views/themes/'.$this->theme_name.'/post.blade.php'))){ return abort('404'); }
        if($post){ return view('themes.'.$this->theme_name.'.post', compact('post')); }
        return abort('404');
    }
    
}
