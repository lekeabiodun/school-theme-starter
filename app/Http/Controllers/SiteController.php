<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public $theme_name;
    public $title;

    public function __construct()
    {
        $this->theme_name = env('THEME_NAME');
    }

    public function index()
    {
        $blocks = collect(explode(',', env('THEME_INDEX_BLOCKS')))->map(function($block) { return (object) ['name' => $block]; });
        return view("themes.$this->theme_name.page", compact('blocks'));
    }

    public function about()
    {
        $blocks = collect(explode(',', env('THEME_ABOUT_BLOCKS')))->map(function($block) { return (object) ['name' => $block]; });
        $this->title = "About" ; #get_site('about_title');
        $subtitle = get_site('about_subtitle');
        // dd("Hit");
    	return view("themes.$this->theme_name.page", ['blocks' => $blocks, 'title'=>$this->title, 'subtitle'=>$subtitle]);
    }

    public function contact()
    {
        $blocks = collect(explode(',', env('THEME_CONTACT_BLOCKS')))->map(function($block) { return (object) ['name' => $block]; });
        $title = "Contact"; #get_site('contact_title');
        $subtitle = get_site('contact_subtitle');
        return view("themes.$this->theme_name.page", compact('blocks', 'title', 'subtitle'));
    }

    public function contactUs()
    {
        if(request()->ajax()) {
            return ['type' => 'success', 'text' => 'Thanks for contacting us, we will get back to you shortly'];
        }
        return back()->withSuccess('Thanks for contacting us, we will get back to you shortly');
    }

    public function events()
    {
        return view('themes.'.$this->theme_name.'.event');
    }

    public function post($post)
    {
        $post = Post::whereSlug($post)->first();
        if(!file_exists(resource_path('views/themes/'.$this->theme_name.'/post.blade.php'))){ return abort('404'); }
        if($post){ return view('themes.'.$this->theme_name.'.post', compact('post')); }
        return abort('404');
    }
    
}
