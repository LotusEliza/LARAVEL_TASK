<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 6/6/19
 * Time: 10:20 AM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function showHome(){
        $list = array(
            'About' => '/about',
            'Articles' => '/articles',
            'Contact Us' => '/contact-us'
        );
        return view('home', array('urls' => $list));
    }

    public function showArticles(){
        $articles_list = array(
            '1' => '/article/1',
            '2' => '/article/2',
            '3' => '/article/3'
        );
        return view('articles', array('articles_list' => $articles_list));
    }

    public function showArticle($id){
        $articles = array(
            array('id' => 1, 'title' => "Volvo", 'desc' => 18),
            array('id' => 2, 'title' => "BMW", 'desc' =>  12),
            array('id' => 3, 'title' => "Saab", 'desc' => 2),
        );
        return view('article', array('id' => $id, 'articles' =>  $articles));
    }

    public function showAbout(){
        return view('about');
    }

    public function contactUs(){
        return view('contact_us');
    }

//    public function postSubmit(){
//        if(Input::has('name', 'message')){
//            return Redirect::action('HomeController@showThankYou')->withInput();
//        }
//        return Redirect::route('contact-us');
//    }

    public function postSubmit(Request $request){

        if ($request->filled(['name', 'message'])) {
            return redirect()->action('HomeController@showThankYou')->withInput();
        }else{
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'message' => 'required',
            ]);
            return back()->withInput();
        }

      }

    public function showThankYou(Request $request){
        $name = $request->old('name');
        return view('thank_you',  array('name' => $name));
    }
}