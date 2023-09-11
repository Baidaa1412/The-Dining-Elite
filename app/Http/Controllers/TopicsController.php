<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicsController extends Controller
{
    public function searchquery($q)
    {
    
        if($search = Request::get('q')){
    
            $topics = Topic::search($search);
        }
        else {
            $topics = Topic::all();
        }
    
        $categories = Category::all();
        $tags = $this->topicRepo->allTags();
        return View::make('topics.topicSearch')->withCategories($categories)->withTopics($topics)->with('term', $q)->withTags($tags);
    
    }
}
