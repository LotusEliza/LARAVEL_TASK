<?php 

class HelloController extends BaseController
{
    public function showHello()
    {
      $name = Input::old('name');
      $list = array(
     'about' => '/about',
     'contact' => '/contact',
     'Terms of Conditions' => '/tos' 
     );
      return View::make('hello2', array('name' => $name, 'urls' => $list));
    }

    public function showForm()
   {
     return View::make('form');
   }

   public function postSubmit()
   {
    if(Input::has('name')){
      // $name = Input::get('name');
       return Redirect::action('HelloController@showHello')->withInput(); 
   }
   return Redirect::route('form'); 
  }
  
  public function dbTest($id)
  {
  //   $user = DB::table('users')->where('id', '=', $id)->select('email')->get();
  # if(DB::table('users')->where('name', 'test3')->count())
  # {
   #  $user = DB::table('users')->where('name', 'test3')->take(1)->delete();
    # var_dump($user);
  # }
  # else
  # {
   #  return "No User";
  # }
  # $track = Track::find($id);
#	$track = Track::where('Name', 'LIKE', '%shark%')->get();
#        $tracks = Track::where('Milliseconds', '>', 5*60*1000)->get();
  	#var_dump($track);

	
	# $tracks = Artist::where('Milliseconds', '>', 5*60*1000)->get();
	# return View::make('songlist', compact('tracks'));
	$artist = Artist::find($id);
	var_dump($artist->tracks);
	$albums = $artist->albums;
	foreach($albums as $album)
	{
		echo $album->Title . '(' .$album->artist->Name . ')';
		echo '<br/>';	
		$tracks =$album->tracks;
		foreach($tracks as $track)
		{
			echo ' - ' . $track->Name . ' (' . $track->album->Title . ')';
			echo'<br/>';
		} 
	}
  }
}
